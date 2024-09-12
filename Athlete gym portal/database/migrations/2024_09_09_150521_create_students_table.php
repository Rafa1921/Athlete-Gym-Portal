<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class StudentController extends Controller
{
    // Show the form to create a new student
    public function create()
    {
        return view('add-student');
    }

    // Store a newly created student in the database
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:students,email',
        ]);

        // Insert data into the students table
        DB::table('students')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'email' => $request->input('email'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back with a success message
        return redirect()->route('student.create')->with('success', 'Student added successfully!');
    }

    // Display a listing of students
    public function index()
    {
        // Fetch data from the database
        $students = DB::table('students')->get();

        return view('manage-students', ['students' => $students]);
    }
}
