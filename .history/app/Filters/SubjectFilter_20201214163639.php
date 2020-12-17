<?php

// SubjectFilter.php

namespace App\Filters;

class SubjectFilter
{
    public function filter($builder, $value) {
        return $builder->where('subject', $value);
    }
}
