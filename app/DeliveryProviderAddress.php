<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryProviderAddress extends Model
{
    public function scopeSearch($query, $value)
    {
        $search = '%' . $value . '%';

        $query->where(function ($query) use ($search) {
            $query
                ->where('name', 'like', $search)
                ->orWhere('address', 'like', $search);
        });
    }
}
