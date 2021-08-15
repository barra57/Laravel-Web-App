<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\dataanggota;
use App\Models\dataujian;

class controllerKP extends Controller {
    public function index(){
        $data = dataanggota::all();
        return view('table',['dataanggotas'=>$data]);
    }

    public function index2(){
        $data2 = dataujian::all();
        return view('dataujian',['dataujians'=>$data2]);
    }

    public function insert(){
 
    // memanggil view insert
    return view('inputdataujian');
    }

    public function insertdb(Request $request){
    // insert data ke table dataujian
    DB::table('dataujians')->insert([
        'No' => $request->No,
        'Nama' => $request->Nama,
        'Tanggaldaftar' => $request->Tanggaldaftar,
        'Ujian' => $request->Ujian,
        'Tanggalujian' => $request->Tanggalujian,
        'Sesi' => $request->Sesi
    ]);
    // alihkan halaman ke halaman dataujian
    return redirect('/dataujian');
    }

    public function edit($No){
    // mengambil data pegawai berdasarkan id yang dipilih
    $dataujian = DB::table('dataujians')->where('No',$No)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('edit',['dataujian' => $dataujian]);
    }

    public function update(Request $request){
    // update data pegawai
    DB::table('dataujians')->where('No',$request->No)->update([
        'No' => $request->No,
        'Nama' => $request->Nama,
        'Tanggaldaftar' => $request->Tanggaldaftar,
        'Ujian' => $request->Ujian,
        'Tanggalujian' => $request->Tanggalujian,
        'Sesi' => $request->Sesi
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/dataujian');
    } 

    public function hapus($Nim) {
        DB::table('dataujians')->where('Nim',$Nim)->delete();
        return redirect('/dataujian');
    }



     public function index3()
    {
        if (!file_exists(storage_path('logs'))) {
            return [];
        }

        $logFiles = \File::allFiles(storage_path('logs'));

        // Sort files by modified time DESC
        usort($logFiles, function ($a, $b) {
            return -1 * strcmp($a->getMTime(), $b->getMTime());
        });

        return view('logfiles');
    }

    public function show($fileName)
    {
        if (file_exists(storage_path('logs/'.$fileName))) {
            $path = storage_path('logs/'.$fileName);

            return response()->file($path, ['content-type' => 'text/plain']);
        }

        return 'Invalid file name.';
    }

    public function download($fileName)
    {
        if (file_exists(storage_path('logs/'.$fileName))) {
            $path = storage_path('logs/'.$fileName);
            $downloadFileName = env('APP_ENV').'.'.$fileName;

            return response()->download($path, $downloadFileName);
        }

        return 'Invalid file name.';
    }
}