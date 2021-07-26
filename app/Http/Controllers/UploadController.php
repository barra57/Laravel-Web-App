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

	public function delete5($id)
    {  
	    DB::table('tabelfileupload')->where('id',$id)->delete();
	    return redirect('/upload');
    }

	public function download(Request $request,$file)
   {
		return response()->download(public_path('assets/'.$file));
   }
}