<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabelcourses;

class CourseController extends Controller
{
    public function form2()
   {
        return view('form2');
   }

   public function table2()
   {
    $table = tabelcourses::all();
    return view ('table2',['tabelcourses'=>$table]);
   }
   
}
