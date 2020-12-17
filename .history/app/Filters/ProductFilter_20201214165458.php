<?php

// ProductFilter.php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    protected $filters = [
        'subject' => SubjectFilter::class,
        'board' => BoardFilter::class,
        'class' => ClassFilter::class,
    ];
}
