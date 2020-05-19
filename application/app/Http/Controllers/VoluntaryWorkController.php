<?php
namespace App\Http\Controllers;
use Exception;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\model\Task;
use App\model\TaskUser;
use App\User;

class VoluntaryWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function voluntary()
    {
        return view('/layouts/voluntary-work');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {     
        //
    }

    /**
     * This method will subscribe the user to the selected task
     * @param int id Task ID
     */
    public function subscribe($id)
    {    
        try{
            if (Auth::user() != null) {
                $user = User::where('id', Auth::user()->id)->first();
                $task = Task::where('id', $id)->first();
                $user->tasks()->attach($task);
            }
            return redirect('/voluntary-work');
        } catch (Exception $e) {
            logger('DB connection failed');
            return $status = false;
        }
    }
    
    /**
     * This method will unsubscribe the user to the selected task
     * @param int id Task ID
     */
    public function unsubscribe($id)
    {    
        try{
            if (Auth::user() != null) {
                $user = User::where('id', Auth::user()->id)->first();
                $task = Task::where('id', $id)->first();
                $user->tasks()->detach($task);
            }
            return redirect('/voluntary-work');
        } catch (Exception $e) {
            logger('DB connection failed');
            return $status = false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $tasks = Task::orderBy('start_date','asc')->Paginate(3);
    //    dd(Auth::user());
        return view('/layouts/voluntary-work', ['tasks'=>$tasks, 'orderby' => 'asc']);
    }       

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
