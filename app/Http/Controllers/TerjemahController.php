<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelterjemahs;

class TerjemahController extends Controller
{
    public function index()
    {
        $table = tabelterjemahs::all();
        return view ('terjemah',['tabelterjemahs'=>$table]);
    }

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

    public function show($id)
    {
        $tabelterjemahs = DB::table('tabelterjemahs')->where('id',$id)->get();
        return view('show',['tabelterjemahs' => $tabelterjemahs]);
    }

    public function edit7($id)
    {
        $tabelterjemahs = DB::table('tabelterjemahs')->where('id',$id)->get();
        return view('edit7',['tabelterjemahs' => $tabelterjemahs]);
    }

    public function update7(Request $request)
    {
        DB::table('tabelterjemahs')->where('id', $request->id)->update(['TextTerjemahan' => $request->TextTerjemahan]);
        return redirect('/terjemah');
    }

    public function destroy($id)
    {
        DB::table('tabelterjemahs')->where('id',$id)->delete();
	    return redirect('/terjemah');
    }

    public function pembayaran($id)
    {
        $tabelterjemahs = DB::table('tabelterjemahs')->where('id',$id)->get();
        return view('pembayaran',['tabelterjemahs' => $tabelterjemahs]);
    }
    public function hasil($id)
    {
        $tabelterjemahs = DB::table('tabelterjemahs')->where('id',$id)->get();
        return view('hasil',['tabelterjemahs' => $tabelterjemahs]);
    }
}
