<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelfileupload;

class EditUploadController extends Controller
{
    public function edit5($id){
        $tabelfileupload = DB::table('tabelfileupload')->where('id',$id)->get();
        return view('edit5',['tabelfileupload' => $tabelfileupload]);
    }
    public function update5(Request $request){
    
        DB::table('tabelfileupload')->where('id',$request->id)->update([
            'file' => $request->file,
            'keterangan' => $request->keterangan
        ]);
        
        return redirect('/upload');
    }
}
