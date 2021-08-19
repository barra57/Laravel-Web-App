<?php

namespace App\Http\Controllers\LanguageTest;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dataujian;

class EditLanguageTestController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($No)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $dataujian = DB::table('dataujians')->where('No',$No)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('languagetest/edit',['dataujian' => $dataujian]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
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
    return redirect('languagetest/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
