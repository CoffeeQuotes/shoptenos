<?php

// ClassFilter.php

namespace App\Filters;

class ClassFilter
{
    public function filter($builder, $value) {
        return $builder->where('class', $value);
    }
}
