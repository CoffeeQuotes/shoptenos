<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Category extends Model implements Searchable
{
      protected $fillable = [
        'name'
      ];

      public function products() {
        return $this->hasMany(Product::class);
      }

      public function getSearchResult(): SearchResult
      {
        $url = route('category.show', $this->slug);

        return new SearchResult(
          $this,
          $this->name,
          $url
        );
      }
}
