<?php

namespace App\Http\Controllers;

use App\Models\studentsModel;
use Illuminate\Http\Request;

class commonController extends Controller
{
    //
    public function admin()
    {
        return view('admin');
    }

    public function addStudent(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'primary_index' => 'required|string|max:255',
            'kcpe_marks' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'stream' => 'required|string|max:255',
            'admission_number' => 'required|string|max:255',
            'admission_date' => 'required|date',
            'dob' => 'required|date',
            'nationality' => 'required|string|max:255',
            'county' => 'required|string|max:255',
            'sub_county' => 'required|string|max:255',
            'gender' => 'required|string|max:255',

            'father_name' => 'required|string|max:255',
            'father_contact' => 'required|string|max:255',
            'father_id' => 'required|string|max:255',

            'mother_name' => 'required|string|max:255',
            'mother_contact' => 'required|string|max:255',
            'mother_id' => 'required|string|max:255',

        ]);
        // return $request;
        studentsModel::create($validatedData);
        return redirect()->route('student-list')->with('success', 'Student has Been Added');
    }
    public function viewStudentAdd()
    {
        return view('students.add_student');
    }

    public function studentList()
    {
        $students = studentsModel::orderBy('students.id', 'DESC')->get();

        return view('students.student_list', compact('students'));
    }
}
