<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelfileupload;

class DeleteUploadController extends Controller
{
    public function delete5($id)
    {  
        DB::table('tabelfileupload')->where('id',$id)->delete();
        return redirect('/upload');
    }
}
