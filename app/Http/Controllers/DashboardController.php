<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $numberOfStudents = Student::count();
        
        return view('dashboard.index', compact('numberOfStudents'));
    }
}