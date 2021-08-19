<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabelcourses;

class ShowCourseController extends Controller
{
    public function show()
    {
        return view ('/course/show');
    }
}
