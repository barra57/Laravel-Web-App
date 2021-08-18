<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
}
