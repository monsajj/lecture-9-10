<?php

namespace App\Shop\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description'
    ];

//    protected $guarded = [
//        'id'
//    ];
}
