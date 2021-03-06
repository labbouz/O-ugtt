<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    protected $fillable = ['nom_secteur'];

    public function conventions()
    {
        return $this->hasMany('\App\Convention');
    }

    public function societes()
    {
        return $this->hasMany('\App\Societe');
    }
}
