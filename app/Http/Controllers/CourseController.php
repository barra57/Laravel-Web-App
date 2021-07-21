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
    public function delete2($NIM)
    {
	    
	    DB::table('tabelcourses')->where('NIM',$NIM)->delete();
		
	    
	    return redirect('/table2');
    }
}
