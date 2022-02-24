<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gitar extends Model
{
    //
    protected $table="gitars";
    protected $primaryKey = "id_gitar";

    //fillable fields
    protected $fillable = ['nama', 'merk', 'jenis', 'harga', 'gambar', 'link'];
    
}
