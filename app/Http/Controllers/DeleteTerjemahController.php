<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\logs;

class DeleteTerjemahController extends Controller
{
    public function destroy($id)
    {
        DB::table('tabelterjemahs')->where('id',$id)->delete();
	    return redirect('/terjemah');
    }
}