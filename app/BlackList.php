<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlackList extends Model
{
    protected $table = "CONTRIBUYENTES2";
    public $timestamps = false;
    protected $fillable = ['RFC', 'Nombre del Contribuyente'];
}
