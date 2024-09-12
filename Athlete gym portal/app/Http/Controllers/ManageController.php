<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ManageController extends Controller
{
    public function index()
    {
        // Dummy data
        $students = new Collection([
            (object) ['name' => 'Sir Raf', 'age' => 23432, 'email' => 'raf@example.com'],
            (object) ['name' => 'Jane Smith', 'age' => 22, 'email' => 'miguel@example.com'],
            (object) ['name' => 'Sir Migs', 'age' => 30, 'email' => 'miguelito@example.com'],
            (object) ['name' => 'Michael Brown', 'age' => 23, 'email' => 'michael@example.com'],
            (object) ['name' => 'Miky Brown', 'age' => 24, 'email' => 'miky@example.com'],
            (object) ['name' => 'Juls Aki', 'age' => 27, 'email' => 'juls@example.com'],
            (object) ['name' => 'Carlo Kohh', 'age' => 24, 'email' => 'michael@example.com'],
            (object) ['name' => 'James Marow', 'age' => 25, 'email' => 'sophia@example.com'],
            (object) ['name' => 'Tevans Lake', 'age' => 254, 'email' => 'tevans@example.com'],

        ]);

        return view('manage-student', ['students' => $students]);
    }
}
