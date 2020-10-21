<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
//    use Sluggable;
    protected $fillable=['name','slug','info','image_url','cartype_id'];


// Slug
//    public function cartype(){
//        return $this->belongsTo(Cartype::class);
//    }
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
//    /**
//     * Return the sluggable configuration array for this model.
//     *
//     * @return array
//     */
//    public function sluggable()
//    {
//        return [
//            'slug' => [
//                'source' => 'name'
//            ]
//        ];
//    }

public function tags()
{
    return $this->belongsToMany(Tag::class);
}

}
