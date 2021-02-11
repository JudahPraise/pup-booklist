<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    public function show(Student $student)
    {
        $student = Student::findOrFail($student->id);
        return view('student.show', compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(StoreStudentRequest $request)
    {
        Student::create(
            $request->all()
        );
        return redirect()->route('student.index');
    }

    public function edit(Student $student)
    {
        $student = Student::findOrFail($student->id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $studentRecord = Student::findOrFail($student->id);
        $studentRecord ->update(
            $request->all()
        );
        return redirect()->route('student.show', $student->id);

    }
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
    

}