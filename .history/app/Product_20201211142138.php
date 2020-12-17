<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = [
        'name',
        'slug',
        'image_main',
        'image_primary',
        'image_secondary',
        'description',
        'price',
        'subject',
        'board',
        'class',
        'meta_keyword',
        'meta_description'
    ];


}
