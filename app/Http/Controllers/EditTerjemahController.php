<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelterjemahs;


class EditTerjemahController extends Controller
{
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
}
