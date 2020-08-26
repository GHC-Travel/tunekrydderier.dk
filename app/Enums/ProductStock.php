<?php

namespace App\Enums;

use App\Casts\ProductStockCast;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

final class ProductStock implements Castable
{
    const Empty = 0;
    const Low = 10;
    const High = 50;
    const Full = 500;

    public int $value;

    /**
     * ProductStock constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function css()
    {
        if ($this->value <= self::Empty) {
            return 'bg-red-500 shadow-solid text-red-900';
        }

        if ($this->value <= self::Low) {
            return 'bg-orange-500 shadow-solid text-orange-900';
        }

        if ($this->value <= self::High) {
            return 'text-white shadow-solid bg-green-400';
        }

        return 'bg-green-500 shadow-solid text-green-900';
    }

    public static function castUsing(): CastsAttributes
    {
        return new ProductStockCast;
    }
}
