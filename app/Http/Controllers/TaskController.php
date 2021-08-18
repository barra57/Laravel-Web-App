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
        
        
        return view ('dashboard2');
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
    
    
      
}   