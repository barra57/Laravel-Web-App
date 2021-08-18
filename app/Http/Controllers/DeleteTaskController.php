<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabeltranslate;

class DeleteTaskController extends Controller
{
    public function delete($NIM)
    {
	    
	    DB::table('tabeltranslate')->where('NIM',$NIM)->delete();
		
	    
	    return redirect('/table');
    }   
}
