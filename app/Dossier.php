<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $table = 'dossiers';

    protected $fillable = ['societe_id','settlement_status','remarque'];

    public function societe()
    {
        return $this->belongsTo('\App\Societe');

    }

    public function moves()
    {
        return $this->belongsToMany('\App\Move');
    }

    public function medias()
    {
        return $this->belongsToMany('\App\Media');
    }

    public function plaintes()
    {
        return $this->belongsToMany('\App\Plainte');
    }
}
