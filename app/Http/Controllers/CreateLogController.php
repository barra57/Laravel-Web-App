<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\logs;

class CreateLogController extends Controller
{
    public function store4(Request $request)
   {
    
    DB::table('logs')->insert([
        'name' => $request->name,
        'NIM' => $request->NIM,
        'email' => $request->email,
    //  'service' => $request->service,
        'logs' => $request->logs
    ]);
        
        return redirect('/table4');
 
    }
}
