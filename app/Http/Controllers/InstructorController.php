<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
use App\Course;

class InstructorController extends Controller
{
    public function index() {
        $instructors = Instructor::get();
        return view('instructors.index', compact('instructors'));
    }

    public function create() {
        return view('instructors.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'user_id' => 'required|numeric|unique:instructors',
            'aoe' => 'required',
            'rating' => 'required|numeric',
        ],  ['user_id.unique' => 'This instructor already exist.'] //custom error message
        );

        Instructor::create($request->all());

        return redirect('/instructors')->with('info', 'New instructor has been created.');
    }


    public function edit(Instructor $instructor) {
        
        return view('instructors.edit', compact('instructor'));
        //return view('instructors.edit', ['instructor'=>$instructor]);
    }

    public function update(Instructor $instructor, Request $request) {

        $this->validate($request, [
            'aoe' => 'required',
            'rating' => 'required|numeric',
        ]);

        $instructor->update($request->all());

        return redirect('/instructors')->with('info', "Instructor " . $instructor->user->fname . " " . $instructor->user->lname . " has been updated.");
    }

    public function destroy(Instructor $instructor, Request $request) {
        $name = $instructor->user->lname . ", " . $instructor->user->fname;
        
        /** deleting child tables first to avoid constraint violation */
        Course::where('instructor_id', $instructor->id)->delete();
        $instructor->delete();

        return redirect("/instructors")->with('info', "The instructor $name has been deleted");
    }

}
