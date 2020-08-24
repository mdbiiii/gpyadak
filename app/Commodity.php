<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $fillable=['name','info','image_url','cartype_id'];



    public function cartype(){
        return $this->belongsTo(Cartype::class);
    }
}
