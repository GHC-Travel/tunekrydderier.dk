<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use function config;
use function money;

class Money implements CastsAttributes
{
  /**
   * Cast the given value to a Money object
   *
   * @param  \Illuminate\Database\Eloquent\Model  $model
   * @param  string  $key
   * @param  mixed  $value
   * @param  array  $attributes
   * @return \Akaunting\Money\Money
   */
  public function get($model, $key, $value, $attributes)
  {
    return money(
      (int)$value,
      Arr::get(
        $attributes,
          Str::before($key, '_').'_currency',
        $attributes['currency'] ?? config('currency.default')
      ),
      true
    );
  }

  /**
   * Prepare the given value for storage.
   *
   * @param  \Illuminate\Database\Eloquent\Model  $model
   * @param  string  $key
   * @param  \Akaunting\Money\Money|integer  $value
   * @param  array  $attributes
   * @return float
   */
  public function set($model, $key, $value, $attributes)
  {
    if ($value instanceof \Akaunting\Money\Money) {
      return $value->getValue();
    }

    return $value;
  }
}
