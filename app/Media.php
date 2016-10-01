<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';

    protected $fillable = ['nom_media','categorie_media'];

    public function dossiers()
    {
        return $this->belongsToMany('\App\Dossier');
    }
}
