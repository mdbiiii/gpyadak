<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable=['name','info','logo_url'];

    public function cars(){
        return $this->hasMany(Cartype::class);
    }


    public function commodities()
    {
        return $this->hasManyThrough('App\Commodity', 'App\Cartype');
    }
}
