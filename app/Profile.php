<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'nom', 'prnom', 'societe', 'structure_syndicale_id', 'phone_number', 'email2', 'avatar'
    ];

    public  function user(){
        return $this->belongsTo('App\User');
    }

    public  function structure_syndicale(){
        return $this->belongsTo('App\StructureSyndicale');
    }
}
