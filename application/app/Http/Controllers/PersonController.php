<?php

namespace App\Http\Controllers;

use App\model\Address;
use App\model\Person;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{

     public function show($id) { 
        $user = User::where('id', $id)->with('person')->first();
        return view('personal-area', ['user'=> $user]);
     }

         /*
             Display a form for editing Person details
         */
        public function edit($id)
         {
             $user = User::where('id', $id)->with('person')->first();
            
             return view('edit-person', ['user'=>$user]);
         }


        public function update(Request $request, $id)
        {
            $user = User::where('id', $id)->first();
            $person = Person::where('user_id', $id)->with('address')->first();
            
            $request->validate([
                'name' => 'required',
                'last_name' => 'required',
                'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
                'street' => 'required',
                'street_nbr' => 'required',
                'house_nbr' => 'required',
                'city' => 'required',
                'postcode' => 'required',
                'country' => 'required'
                ]);

            if ($person!= null)
            {

                // User info
                $user->name = $request->name;
                $user->save();
    
                // Person info
                $person->last_name = $request->last_name;
                $person->phone_number = $request->phone_number;
    
                $person->save();
    
                // Address info
                $person->address->street = $request->street;
                $person->address->street_nbr = $request->street_nbr;
                $person->address->house_nbr = $request->house_nbr;
                $person->address->city = $request->city;
                $person->address->postcode = $request->postcode;
                $person->address->country = $request->country;
                 
                $person->address->save();
                

            }
            else {
                //Address data
                $address = new Address;

                $address->street = $request->street;
                $address->street_nbr = $request->street_nbr;
                $address->house_nbr = $request->house_nbr;
                $address->city = $request->city;
                $address->postcode = $request->postcode;
                $address->country = $request->country;

                $address->save();

                //Person data
                $person = new Person;
                $person->last_name = $request->last_name;
                $person->phone_number = $request->phone_number;
                $person->user_id = Auth::user()->id;
                $person->address_id = $address->id;

                $person->save();
                
                
            }

            return redirect('personal-area/'.$id);
        
        }

    
}
