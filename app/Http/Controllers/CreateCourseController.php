<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabelcourses;

class CreateCourseController extends Controller
{
    public function store2(Request $request)
   {
	
	DB::table('tabelcourses')->insert([
		'name' => $request->name,
		'NIM' => $request->NIM,
		'email' => $request->email,
	//	'service' => $request->service,
        'course' => $request->course
	]);
	    
	    return redirect('/table2');
 
    }
}
