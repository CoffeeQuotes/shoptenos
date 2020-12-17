<?php

// BoardFilter.php

namespace App\Filters;

class BoardFilter
{
    public function filter($builder, $value) {
        return $builder->where('board', $value);
    }
}
