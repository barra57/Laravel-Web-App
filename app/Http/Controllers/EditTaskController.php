<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabeltranslate;

class EditTaskController extends Controller
{
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
}
