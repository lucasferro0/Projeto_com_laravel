<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporadas extends Model
{
    protected $table = "temporadas";

    protected $primaryKey = "cod_temporada";

    protected $fillable = ["numero_temporada"];

    public $timestamps = false;

    public function episodios(){

        return $this->hasMany(Episodios::class);
    }

    public function serie(){

        return $this->belongsTo(Series::class);
    }
}
