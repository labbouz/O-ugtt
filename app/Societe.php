<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = ['nom_societe', 'nom_marque','type_societe_id','gouvernorat_id','delegation_id','secteur_id','accord_de_fondation','convention_cadre_commun','convention_id','nombre_travailleurs_cdi','nombre_travailleurs_cdd','date_cration_societe','createdby'];

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

    public function dossiers()
    {
        return $this->hasMany('\App\Dossier');
    }
}
