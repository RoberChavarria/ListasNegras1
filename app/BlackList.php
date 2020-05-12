<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlackList extends Model
{
    protected $table = "CONTRIBUYENTES";
    public $timestamps = false;
    protected $fillable = ['RFC', 'NOMBRE', 'SITUACION'];
}
