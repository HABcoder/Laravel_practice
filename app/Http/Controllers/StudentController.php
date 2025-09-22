<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allStudents = Student::all();
        return view('students.index', compact('allStudents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        'name' => 'required|string',
        'email' => 'required|email',
        'date_of_birth' => 'required|date',
        'class' => 'nullable|string',
        'age' => 'required|numeric',
    ]);
     

    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'date_of_birth' => $request->date_of_birth,
        'class' => $request->class,
        'age' => $request->age,
    ]);


        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $student = Student::find($student->id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $id)
    {
        $student = Student::find($id);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'date_of_birth' => 'required|date',
            'class' => 'required',
            'age' => 'required|numeric',
        ]);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'class' => $request->class,
            'age' => $request->age,
        ]);
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
