<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabelcourses;


class EditCourseController extends Controller
{
    public function edit2($NIM){
        $tabelcourses = DB::table('tabelcourses')->where('NIM',$NIM)->get();
 
        return view('edit2',['tabelcourses' => $tabelcourses]);
    }
    public function update2(Request $request)
 {
     
     DB::table('tabelcourses')->where('NIM',$request->NIM)->update([
         'name' => $request->name,
         'NIM' => $request->NIM,
         'email' => $request->email,
         'course' => $request->course
 
     ]);
     
     return redirect('/table2');
 }
}
