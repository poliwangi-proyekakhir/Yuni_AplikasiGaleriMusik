<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table="merks";
    protected $primaryKey = "id_merk";

    //fillable fields
    protected $fillable = ['nama_merk'];
}
