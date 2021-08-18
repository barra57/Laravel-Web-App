<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelfileupload;

class UploadController extends Controller
{
	public function upload(){
		$tabelfileupload = tabelfileupload::get();
		return view('upload',['tabelfileupload' => $tabelfileupload]);
	}

}