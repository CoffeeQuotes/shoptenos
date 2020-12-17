<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

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
        'category_id',
        'meta_keyword',
        'meta_description'
    ];
}
