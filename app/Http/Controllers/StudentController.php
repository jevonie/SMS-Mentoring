<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Student::where("last_name", "LIKE", "%{$request->search}%")->where("is_active", 1)->get();
        return view("students.index", compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id'    => 'required',
            'first_name'    => 'required',
            'last_name'     => 'required',
            'course'        => 'required',
            'birthday'      => 'required',
            'address'       => 'required',
        ]);

        $student = new Student();
        $student->student_id    = $request->student_id;
        $student->first_name    = $request->first_name;
        $student->last_name     = $request->last_name;
        $student->middle_name   = $request->middle_name;
        $student->course        = $request->course;
        $student->contact_no    = $request->contact_no;
        $student->birthday      = $request->birthday;
        $student->address       = $request->address;
        $student->email         = $request->email;
        $student->save();

        return back()->with("status", "Successfully saved!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view("students.edit", compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'student_id'    => 'required',
            'first_name'    => 'required',
            'last_name'     => 'required',
            'course'        => 'required',
            'birthday'      => 'required',
            'address'       => 'required',
        ]);

        $student->student_id    = $request->student_id;
        $student->first_name    = $request->first_name;
        $student->last_name     = $request->last_name;
        $student->middle_name   = $request->middle_name;
        $student->course        = $request->course;
        $student->contact_no    = $request->contact_no;
        $student->birthday      = $request->birthday;
        $student->address       = $request->address;
        $student->email         = $request->email;
        $student->save();

        return back()->with("status", "Successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->is_active = false;
        $student->save();

        return back()->with("status", "Successfully deleted!");
    }
}
