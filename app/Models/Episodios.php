<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodios extends Model
{
    protected $table = "episodios";

    protected $primaryKey = "cod_episodio";

    protected $fillable = ["numero_episodio"];

    public $timestamps = false;

    public function temporada(){

        return $this->belongsTo(Temporadas::class);
    }
}
