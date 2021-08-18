<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\dataujian;

class LanguageTestController extends Controller
{
    public function index2(){
        $data2 = dataujian::all();
        return view('dataujian',['dataujians'=>$data2]);
    }
}
