<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidCurrency implements Rule
{
    public array $currencies;

    /**
     * ValidCurrency constructor.
     */
    public function __construct()
    {
        $this->currencies = config('currency.supported');
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return in_array($value, $this->currencies);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.in_array', ['other' => implode(', ', $this->currencies)]);
    }
}
