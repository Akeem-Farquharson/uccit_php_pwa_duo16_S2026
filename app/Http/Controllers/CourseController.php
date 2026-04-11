<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // Retrieve all courses from the database ordered by course code
        $courses = Course::orderBy('code')->get();

        // Pass course data to the courses view
        return view('courses', compact('courses'));
    }
}