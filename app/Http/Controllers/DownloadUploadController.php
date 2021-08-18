<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelfileupload;

class DownloadUploadController extends Controller
{
    public function download(Request $request,$file)
   {
        return response()->download(public_path('assets/'.$file));
   }
}
