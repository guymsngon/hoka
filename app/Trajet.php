<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable = [
        'bateau','avion','route','train','country_out','country_in','town_out','town_in','address_out','address_in','incorterm','content_model','length','width','height','volume','weight_unity','weight','assurance','detail_assurance','danger_merchandise','classe_merchandise','nature_merchandise','images','info_sup','tarif','date_out','id_user'
    ];
}
