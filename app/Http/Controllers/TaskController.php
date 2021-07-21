<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabeltranslate;

class TaskController extends Controller
{
    public function index()
    {
        
        
        return view ('dashboard');
    }
    public function form()
   {
        return view('form');
   }
   
   public function table()
   {
        $table = tabeltranslate::all();
        return view ('table',['tabeltranslate'=>$table]);
        
   }
    public function store(Request $request)
   {
	
	DB::table('tabeltranslate')->insert([
		'name' => $request->name,
		'NIM' => $request->NIM,
		'email' => $request->email,
	//	'service' => $request->service,
        'book' => $request->book
	]);
	    
	    return redirect('/table');
 
    }
   public function edit($NIM){
       $tabeltranslate = DB::table('tabeltranslate')->where('NIM',$NIM)->get();

       return view('edit',['tabeltranslate' => $tabeltranslate]);
   }
   public function update(Request $request)
{
	
	DB::table('tabeltranslate')->where('NIM',$request->NIM)->update([
		'name' => $request->name,
		'NIM' => $request->NIM,
		'email' => $request->email,
		'book' => $request->book

	]);
	
	return redirect('/table');
}
    public function delete($NIM)
    {
	    
	    DB::table('tabeltranslate')->where('NIM',$NIM)->delete();
		
	    
	    return redirect('/table');
    }   
      
}   