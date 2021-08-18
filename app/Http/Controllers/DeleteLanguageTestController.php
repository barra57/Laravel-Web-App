<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\dataujian;

class DeleteLanguageTestController extends Controller
{
    public function hapus($Nim) {
        DB::table('dataujians')->where('Nim',$Nim)->delete();
        return redirect('/dataujian');
    }
}
