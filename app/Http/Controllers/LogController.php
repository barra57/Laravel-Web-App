<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\logs;

class LogController extends Controller
{
    public function form4()
   {
        return view('form4');
   }

   public function table4()
   {
    $table = logs::all();
    return view ('table4',['logs'=>$table]);
   }
   public function store4(Request $request)
   {
	
	DB::table('logs')->insert([
		'name' => $request->name,
		'NIM' => $request->NIM,
		'email' => $request->email,
	//	'service' => $request->service,
        'logs' => $request->logs
	]);
	    
	    return redirect('/table4');
 
    }
    public function delete4($NIM)
    {
	    
	    DB::table('logs')->where('NIM',$NIM)->delete();
		
	    
	    return redirect('/table4');
    }
}
