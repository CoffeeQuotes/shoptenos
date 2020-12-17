<?php

namespace App;

use App\Filters\ProductFilter;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model implements Searchable
{

    public function scopeFilter(Builder $builder, $request)
    {
        return (new ProductFilter($request))->filter($builder);
    }
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
        'meta_description',
        'category_id'
    ];
    // Relationship with the category (Product belongs to the Category)
    public function category()
    {
      return $this->belongsTo(Category::class);
    }
    // Search
    public function getSearchResult(): SearchResult
    {
      $url = route('products.show', $this->slug);

      return new SearchResult(
        $this,
        $this->name,
        $url
      );
    }

}
