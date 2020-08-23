<?php

use App\ExchangeRate;
use Illuminate\Database\Seeder;

class ExchangeRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExchangeRate::query()->insert(
            [
              [
                'from_currency' => 'DKK',
                'to_currency' => 'EUR',
                'value' => 0.27,
                'date' => '2020-03-08'
              ],
              [
                'from_currency' => 'DKK',
                'to_currency' => 'USD',
                'value' => 0.15,
                'date' => '2020-03-08'
              ],
              [
                'from_currency' => 'DKK',
                'to_currency' => 'NOK',
                'value' => 2.72,
                'date' => '2020-03-08'
              ],
              [
                'from_currency' => 'DKK',
                'to_currency' => 'SEK',
                'value' => 2.83,
                'date' => '2020-03-08'
              ]
            ]
        );
    }
}
