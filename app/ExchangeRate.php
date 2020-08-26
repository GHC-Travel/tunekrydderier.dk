<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Date;
use function config;
use function floor;
use function is_numeric;
use function round;

/**
 * Class ExchangeRate
 * @package App
 * @mixin Builder
 * @method static static search($value)
 */
class ExchangeRate extends Model
{
    protected $guarded = [];

    protected $casts = [
        'date' => 'date'
    ];

    /**
     * Find the latest exchange rate for converting to given currency
     *
     * @param string $currency
     * @return ExchangeRate
     * @throws ModelNotFoundException
     */
    public static function latestToCurrency(string $currency)
    {
        return static::query()
            ->where('from_currency', config('currency.default'))
            ->where('to_currency', $currency)
            ->latest();
    }

    /**
     * Get the exchange rates to given currency at given date
     *
     * @param string $currency
     * @param string $date
     * @return ExchangeRate
     * @throws ModelNotFoundException
     */
    public static function toCurrency(string $currency, $date)
    {
        return static::query()
            ->where('from_currency', config('currency.default'))
            ->where('to_currency', $currency)
            ->where('date', Date::make($date)->toDateString());
    }

    public function scopeSearch($query, $value)
    {
        if (is_numeric($value)) {
            $query->where(function ($query) use ($value) {
                $query
                    ->where('value', '>=', (int)round($value))
                    ->where('value', '<=', (int)floor($value) + 1);
            });
        } else {
            $term = '%' . $value . '%';

            $query->where(function ($query) use ($term) {
                $query->where('to_currency', 'like', $term);
            });
        }
    }
}
