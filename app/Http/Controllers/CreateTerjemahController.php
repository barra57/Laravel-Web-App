<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelterjemahs;


class CreateTerjemahController extends Controller
{
    public function create()
    {
        return view ('formterjemah');
    }

    public function store(Request $request)
    {
        DB::table('tabelterjemahs')->insert([
            'id'=>$request->id,
            'TanggalTerjemah' => $request->TanggalTerjemah,
            'NamaLengkap' => $request->NamaLengkap,
            'TanggalDaftar' => $request->TanggalDaftar,
            'Penerjemah' => $request->Penerjemah,
            'TextTerjemahan' => $request->TextTerjemahan
        ]);
        return redirect('/terjemah');
    }
}
