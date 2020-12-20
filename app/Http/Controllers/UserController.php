<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Learner;
use App\Instructor;
use App\Course;

class UserController extends Controller
{
    public function index() {
        $users = User::orderByRaw('lname,fname')->get();
        return view('users.index', ['users'=>$users]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'lname' => $request['lname'],
            'fname' => $request['fname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect('/users')->with('info', 'A new user has been created.');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('users.edit', ['user'=>$user]);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);

        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->update($request->all());

        return redirect('/users')->with('info', "The record of $user->fname $user->lname has been updated.");
    }

    public function destroy(Request $request, $id) {
        $userId = $request['user_id'];

        $user = User::find($userId);
        
        $name = $user->lname . ", " . $user->fname;

        /** deleting child tables first to avoid constraint violation */
        $instructors = Instructor::where('user_id', $userId)->get();
        
        foreach($instructors as $i) {
            Course::where('instructor_id', $i->id)->delete();
        }
        
        Learner::where('user_id', $userId)->delete();
        Instructor::where('user_id', $userId)->delete();
        
        $user->delete();

        return redirect("/users")->with('info', "The user $name has been deleted");
    }
}
