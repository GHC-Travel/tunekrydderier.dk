<?php

namespace App\Http\Livewire;

use App\Money;
use App\Rules\ValidCurrency;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use function array_merge;
use function config;

trait TracksCurrency
{
    public string $currency = 'DKK';

    public function initializeTracksCurrency()
    {
        $this->currency = (string)Request::query('currency', config('currency.default'));

        $this->updatesQueryString = array_merge([
            'currency' => ['except' => '']
        ], $this->updatesQueryString);

        View::share('money', fn (int $amount) => Money::convert($amount)->to($this->currency)->format());
    }

    public function updatedCurrency()
    {
        $this->validateOnly('currency', [
            'currency' => [new ValidCurrency]
        ]);
    }
}
