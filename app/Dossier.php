<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable = ['societe_id','settlement_status'];

    public function societe()
    {
        return $this->belongsTo('\App\Societe');

    }
}
