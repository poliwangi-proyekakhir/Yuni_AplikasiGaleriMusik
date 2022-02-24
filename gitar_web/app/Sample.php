<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    //
    protected $table="samples";
    protected $primaryKey = "id_sample";

    //fillable fields
    protected $fillable = ['label', 'variasi', 'file', 'user_id']; 
}
