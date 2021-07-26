<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabelfileupload extends Model
{
    protected $table = "tabelfileupload";
 
    protected $fillable = ['file','keterangan'];
}
