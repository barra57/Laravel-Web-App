<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelterjemahs;


class HasilTerjemahController extends Controller
{
    public function hasil($id)
    {
        $tabelterjemahs = DB::table('tabelterjemahs')->where('id',$id)->get();
        return view('hasil',['tabelterjemahs' => $tabelterjemahs]);
    }
}
