<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tabelterjemahs;


class PembayaranTerjemahController extends Controller
{
    public function pembayaran($id)
    {
        $tabelterjemahs = DB::table('tabelterjemahs')->where('id',$id)->get();
        return view('pembayaran',['tabelterjemahs' => $tabelterjemahs]);
    }
}
