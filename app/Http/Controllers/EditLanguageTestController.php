<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\dataujian;

class EditLanguageTestController extends Controller
{
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
}
