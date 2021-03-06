<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    protected $table = 'moves';

    protected $fillable = ['nom_move'];

    public function dossiers()
    {
        return $this->belongsToMany('\App\Dossier');
    }
}
