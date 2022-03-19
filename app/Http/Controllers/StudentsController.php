<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function students()
    {
        $students = Student::get();
        return view('students', compact('students'));
    }

    public function createStudent()
    {
        return view('create_student');
    }

    public function storeStudent(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'class' => $request->class
        ]);

        return redirect(route('student.create'));
    }

    public function deleteStudent(Request $request)
    {
        $student = Student::where('id', $request->id)->first();
        if($student)
        {
            $student->delete();
            return redirect()->back();
        }
    }
}
