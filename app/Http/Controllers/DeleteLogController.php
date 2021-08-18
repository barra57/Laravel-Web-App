<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\logs;

class DeleteLogController extends Controller
{
    public function delete4($NIM)
    {
        
        DB::table('logs')->where('NIM',$NIM)->delete();
        
        
        return redirect('/table4');
    }
}
