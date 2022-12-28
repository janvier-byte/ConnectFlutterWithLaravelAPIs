<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        Return Student::all();
    }
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stname' => 'required',
            'email' => 'required|email',
        ]);

        Student::create($request->all());

        return redirect()->route('student.index')
                        ->with('success','User created successfully.');
    }

}
