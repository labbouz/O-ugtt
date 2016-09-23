<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{


    protected $fillable = ['nom_violation','description_violation','type_violationt_id','gravite_id','class_color_violation'];

    public function typeviolation()
    {
        return $this->belongsTo('\App\TypeViolation');

    }

    public function gravite()
    {
        return $this->belongsTo('\App\Gravite');

    }
}
