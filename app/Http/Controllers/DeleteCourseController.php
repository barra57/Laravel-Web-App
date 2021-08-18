<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabelcourses;

class DeleteCourseController extends Controller
{
    public function delete2($NIM)
    {
	    
	    DB::table('tabelcourses')->where('NIM',$NIM)->delete();
		
	    
	    return redirect('/table2');
    }
}
