<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table="jeniss";
    protected $primaryKey = "id_jenis";

    //fillable fields
    protected $fillable = ['nama_jenis'];
}
