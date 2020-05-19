<?php

namespace App\Http\Controllers;

use App\Mail\MailAFS;
use App\model\Gender;
use App\model\Animal;
use App\model\AnimalType;
use App\model\AnimalUser;
use App\model\Breed;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PetsController extends Controller
{
    /**
     * Display a listing of the pets consider the followinf filtering:
     * - Pet's name
     * - Pet's gender
     * - Pet's type
     * - Pet's breed
     * - Is pet disabled
     * - Number of pets per page
     *
     * @param Request request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $conditions = array();

        $filter = array();

        // Name filter
        if (isset($request->petName) && !empty($request->petName)) {
            array_push($conditions, ['name', 'like', '%' . $request->petName . '%']);
            $filter['petName'] = $request->petName; 
        }
        
        // Gender filter
        if($request->has('petGender')) {
            array_push($conditions, ['gender_id', $request->petGender]);
            $filter['petGender'] = $request->petGender; 
        }

        // Type filter
        if($request->has('petType')) {
            array_push($conditions, ['animal_type_id', $request->petType]);
            $filter['petType'] = $request->petType; 
        }
        
        // Type filter
        if($request->has('petBreed')) {
            array_push($conditions, ['breed_id', $request->petBreed]);
            $filter['petBreed'] = $request->petBreed; 
        }

        // isDisabled filter
        $isDisabled = false;
        if($request->has('petIsDisabled')) {
            $isDisabled = true;
            array_push($conditions, ['isDisabled', $isDisabled]);
            $filter['petIsDisabled'] = $isDisabled; 
        }

        // Nbr by page
        $nbrPets = 4;
        if($request->has('nbrPets'))
            $nbrPets = $request->nbrPets; 

        if (count($conditions) == 0)
            $pets = Animal::where('isDisabled', $isDisabled)->orderBy('arrival_date', 'desc')->paginate($nbrPets);
        else
            $pets = Animal::where($conditions)->orderBy('arrival_date', 'desc')->paginate($nbrPets);
        
        return view('pets/pets', ['pets' => $pets, 'filter' => $filter] + $this->getData());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets/new-pet', $this->getData());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new Animal;
        $animal->name = $request->petName;
        $animal->description = $request->petDescription;
        if($request->has('petIsDisabled'))
            $animal->description = true;
        $animal->arrival_date = now();
        $animal->gender_id = $request->petGender;
        $animal->animal_type_id = $request->petType;
        $animal->breed_id = $request->petBreed;

        $animal->save();

        return redirect('/pets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $pet = Animal::where('id', $id)->first();
        $pet = Animal::where('id', $id)
                     ->with('gender', 'animal_type', 'breed', 'animal_users')
                     ->first();

        if (empty($pet))
            return view('notfound');
        else
            return view('pets/pet', ['pet' => $pet]);
    }

    /**
     * Show the form for editing the pet.\
     * 
     * Only Admin users can edit.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response `Animal` info and data to fill components
     */
    public function edit($id)
    {
        // No user logged => Redirect to view that pet
        if (Auth::user() == null)
            return redirect('/pet/show/' . $id);
            
        $user = User::where('id', Auth::user()->id)->with('roles')->first();

        // Search admin role among all the roles the user has
        foreach ($user->roles as $role) {
            if (strcasecmp($role->name, 'admin') == 0) {
                $pet = Animal::where('id', $id)->with('gender', 'animal_type', 'breed')->first();

                return view('pets/edit-pet', ['pet' => $pet] + $this->getData());
            }
        }
        // If user is not admin, show the animal info
        return redirect('/pet/show/' . $id);
    }

    /**
     * Update the animal in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animal = Animal::where('id', $id)->with('users')->first();
        // $animal = Animal::where('id', $id)->with('animal_users')->first();

        // Get the previous status for disabled
        $isDisabledOld = $animal->isDisabled;
        
        // Get the nex status for disabled
        $isDisabledNew = false;
        if ($request->isDisabled != null)
            $isDisabledNew = true;

        // Check if 'isDisabled' changed and now the pet is disabled 
        $isDisabled = false;
        if ($isDisabledNew != $isDisabledOld && $isDisabledNew)
            $isDisabled = true;

        // Update animal
        $animal->name = $request->name;
        $animal->breed_id = $request->breed;
        $animal->gender_id = $request->gender;
        $animal->animal_type_id = $request->animalType;
        $animal->description = $request->description;
        $animal->isDisabled = $isDisabled;

        // Update every 'animal_record' record for that animal.
        // Update arrival_date t
        $now = now();
        foreach ($animal->users as $au) {
        // foreach ($animal->animal_users as $au) {
            $au->arrival_date = $now;
        }

        // As save() but also populate to nested tables
        $animal->push();

        return redirect('/pet/show/' . $id);
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
    }

    /**
     * This method will retrieve from the Database the different data to fill components.
     * 
     * @return Array [ [`Gender`], [`AnimalType`], [`Breed`] ]
     */
    public function getData()
    {
        // $pet = Animal::where('id', $id)->with('gender', 'animal_type', 'breed')->first();        
        $genders = Gender::orderBy('value', 'asc')->get();
        $types = AnimalType::orderBy('name', 'asc')->get();
        $breeds = Breed::orderBy('name', 'asc')->get();

        return ['genders' => $genders, 'types' => $types, 'breeds' => $breeds];
    }

    /**
     * Disable the specified resource from DB.\
     * Actions to be executed:
     * - Update attribute `isDisabled` in `Animal` table for that record.
     * - Update attribute `returnDate` in `Animal-User` table for the `Animal`'s any record .\
     * 
     * Return to the current list of pets
     * @param  Request  $request
     * @param  int  $id `Animal` id
     */
    public function disable(Request $request, $id)
    {
        // $animal = Animal::where('id', $id)->with('users')->first();
        $animal = Animal::where('id', $id)->with('animal_users')->first();

        $animal->isDisabled = true;

        // Update every 'animal_record' record for that animal.
        // Update arrival_date t
        $now = now();
        // foreach ($animal->animal_users as $au) {
        foreach ($animal->users as $au) {
            $au->arrival_date = $now;
        }

        // As save() but also populate to nested tables
        $animal->push();

        return redirect('/pet/show/' . $id);
    }

    /**
     * Enable the specified resource from DB.\
     * Actions to be executed:
     * - Update attribute `isDisabled` in `Animal` table for that record.
     * 
     * Return to the current list of pets
     * @param  Request  $request
     * @param  int  $id `Animal` id
     */
    public function enable(Request $request, $id)
    {
        $animal = Animal::updateOrCreate(
            ['id' => $id],
            ['isDisabled' => false]
        );

        return redirect('/pet/show/' . $id);
    }
   
    /**
     * This method will close all the records in the table `AnimalUser`, updating
     * the attribute `arrival_date`.
     * 
     * @param  Request  $request
     * @param  int  $id `Animal` id
     */
    public function return(Request $request, $id)
    {
        $animal = Animal::where('id', $id)->with('animal_users')->first();

        $now = now();
        foreach ($animal->animal_users as $au) {
            if ($au->arrival_date == null) {
                $au->arrival_date = $now;
            }
        }

        // As save() but also populate to nested tables
        $animal->push();

        return redirect('/pet/show/' . $id);
    }

    /**
     * This method will run the action requested for that animal
     */
    public function afsShow($action, $id)
    {
        // $user = User::where('id', Auth::user()->id)->with('person')->first();
        $pet = Animal::where('id', $id)->with('gender', 'animal_type', 'breed')->first();
     
        return view('pets/afs', ['pet' => $pet, 'action' => $action]);
    
    }
    /**
     * This method will run the action requested for that animal:
     * - adopt: 
     * - foster: 
     * - sponsor: 
     * 
     * @param String action it can be: _adopt_, _foster_, _sponsor_
     * @param int id Pet ID
     */
    public function afs($action, $petId)
    {
        $message = 'pets.afs.notexecuted';
        if (Auth::user() != null) {

            $user = User::where('id', Auth::user()->id)->with('person')->first();
            $pet = Animal::where('id', $petId)->first();
        
            $attributes = array();
            switch ($action) {
                case 'sponsor':
                    $user->animals()->attach($pet, [
                        'isFoster' => false,
                        'isSponsor' => true,                        
                        'departure_date' => now() 
                    ]);
                    break;
                case 'foster':
                    $user->animals()->attach($pet, [
                        'isFoster' => true,
                        'isSponsor' => false,                        
                        'departure_date' => now() 
                    ]);
                    break;
                case 'adopt':
                    $user->animals()->attach($pet, [
                        'isFoster' => false,
                        'isSponsor' => false,                        
                        'departure_date' => now() 
                    ]);
                    // TODO Close all the other records
                    
                break;
            }
            $message = 'pets.sent.message';
            $admin = User::where('email', 'adoptapetsite@protonmail.com')->with('person')->first();
            Mail::to($user)
                ->cc($admin->email)
                ->send(new MailAFS($user, $pet, $action));
        }
        return redirect('/pet/show/' . $petId)->with('status', $message);
    }

}
