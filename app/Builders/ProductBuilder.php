<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class ProductBuilder extends Builder
{
    public function search($value)
    {
        return $this->where('name', 'like', '%'.$value.'%');
    }
}