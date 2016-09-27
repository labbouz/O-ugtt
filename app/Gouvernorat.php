<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gouvernorat extends Model
{

    protected $fillable = ['nom_gouvernorat','permission_slug'];

    public function delegations()
    {
        return $this->hasMany('\App\Delegation');
    }

    public function societes()
    {
        return $this->hasMany('\App\Societe');
    }
}
