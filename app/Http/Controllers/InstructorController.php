<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

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
            'user_id' => 'required|numeric',
            'aoe' => 'required',
            'rating' => 'required|numeric',
        ]);

        Instructor::create($request->all());

        return redirect('/instructors')->with('info', 'New instructor has been created.');
    }


    public function edit($id) {
        $instructor = Instructor::find($id);

        return view('instructors.edit', ['instructor'=>$instructor]);
    }

    public function update(Request $request, $id) {
        $instructor = Instructor::find($id);

        $this->validate($request, [
            'aoe' => 'required',
            'rating' => 'required|numeric',
        ]);

        $instructor->update($request->all());

        return redirect('/instructors')->with('info', "Instructor " . $instructor->user->fname . " " . $instructor->user->lname . " has been updated.");
    }


}
