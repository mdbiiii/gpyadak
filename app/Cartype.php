<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartype extends Model
{
    protected $fillable=['name','info','image_url','brand_id'];

    public function commodities(){
        return $this->hasMany(Commodity::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
