<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\dataujian;

class CreateLanguageTestController extends Controller
{
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
}
