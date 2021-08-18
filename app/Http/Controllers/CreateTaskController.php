<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabeltranslate;

class CreateTaskController extends Controller
{
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
}
