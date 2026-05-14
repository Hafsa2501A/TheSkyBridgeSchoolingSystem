<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Agar aapka data User table mein hai

class AdminController extends Controller
{
    public function index()
    {
        // Yahan hum count nikaal rahe hain
        // फर्ज़ karein aapne 'role' column banaya hai users table mein
        $totalStudents = User::where('role', 'student')->count();
        $totalTeachers = User::where('role', 'teacher')->count();

        return view('dashboard', compact('totalStudents', 'totalTeachers'));
    }

    public function students()
    {
        $students = User::where('role', 'student')->get();
        return view('admin.students', compact('students'));
    }

    public function teachers()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.teachers', compact('teachers'));
    }
}
