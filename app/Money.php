<?php

namespace App;

use Akaunting\Money\Money as AkauntingMoney;
use function config;
use function money;
use function today;
use function transform;

/**
 * Class Money
 * @package App
 * @mixin AkauntingMoney
 */
class Money
{
    public int $amount;
    public string $fromCurrency;
    public string $toCurrency;
    public ?ExchangeRate $exchangeRate = null;

    /**
     * MoneyResolver constructor.
     *
     * @param int $amount
     * @param string|ExchangeRate $currency
     */
    private function __construct(int $amount, string $currency = 'DKK')
    {
        $this->amount = $amount;
        $this->fromCurrency = $currency;
    }

    /**
     * Proxy calls to the underlying money inside
     *
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function __call(string $method, array $params)
    {
        return $this->make()->$method(...$params);
    }

    /**
     * @param int $amount
     * @param string|ExchangeRate $currency
     * @return Money
     */
    public static function convert(int $amount, string $currency = 'DKK')
    {
        return new static($amount, $currency);
    }

    public function to(string $currency, $exchangeRateDate = null)
    {
        if ($currency instanceof ExchangeRate) {
            $this->toCurrency = $currency->to_currency;
            $this->exchangeRate = $currency;
        } else {
            $this->toCurrency = $currency;

            if ($currency !== config('currency.default')) {
                if ($exchangeRateDate) {
                    $this->loadHistoricalExchangeRate($currency, $exchangeRateDate);
                } else {
                    $this->loadLatestExchangeRate($currency);
                }
            }
        }

        return $this;
    }

    /**
     * Create an instance of Akaunting Money
     *
     * @return AkauntingMoney
     */
    public function make()
    {
        if ($this->exchangeRate) {
            return money(
                $this->amount * $this->exchangeRate->value,
                $this->exchangeRate->to_currency,
                true
            );
        }

        return money(
            $this->amount,
            $this->toCurrency ?? $this->fromCurrency,
            true
        );
    }

    /**
     * @param string $currency
     * @param string|null $exchangeRateDate
     */
    private function loadHistoricalExchangeRate($currency, $exchangeRateDate): void
    {
        $this->exchangeRate = transform($exchangeRateDate, function ($date) use ($currency) {
            if ($rate = ExchangeRate::toCurrency($currency, $date)->first()) {
                return $rate;
            }

            return ExchangeRate::latestToCurrency($currency)->firstOrFail();
        });
    }

    private function loadLatestExchangeRate($currency): void
    {
        $this->exchangeRate = transform($currency, function ($currency) {
            if ($rate = ExchangeRate::toCurrency($currency, today())->first()) {
                return $rate;
            }

            return ExchangeRate::latestToCurrency($currency)->firstOrFail();
        });
    }
}
