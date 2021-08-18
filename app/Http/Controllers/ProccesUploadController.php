<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelfileupload;

class ProccesUploadController extends Controller
{
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required|file|mimes:pdf|max:2048',
            'keterangan' => 'required',
        ]);

        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        tabelfileupload::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->back();
    }
}
