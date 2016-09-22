<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = ['nom_societe','type_societe_id','gouvernorat_id','delegation_id','secteur_id','convention_id','nombre_travailleurs','cdi','date_cration_societe'];

    public function type_societe()
    {
        return $this->belongsTo('\App\TypeSociete');

    }

    public function delegation()
    {
        return $this->belongsTo('\App\Delegation');

    }

    public function gouvernorat()
    {
        return $this->belongsTo('\App\Gouvernorat');

    }

    public function secteur()
    {
        return $this->belongsTo('\App\Secteur');

    }

    public function convention()
    {
        return $this->belongsTo('\App\Convention');

    }
}
