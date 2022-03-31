<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = "series";

    protected $primaryKey = "cod_serie";

    protected $fillable = ["nome_serie"];
    
    public $timestamps = false;
}
