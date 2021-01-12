<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'id_user','length1','width1','height1','volume1','weight1','images1','length2','width2','height2','volume2','weight2','images2','length3','width3','height3','volume3','weight3','images3','length4','width4','height4','volume4','weight4','images4','length5','width5','height5','volume5','weight5','images5','volume_tot','weight_tot','assurance','detail_assurance','info_sup','nature_merchandise'
    ];
}
