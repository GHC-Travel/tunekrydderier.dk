<?php return [
  'supported' => env('CURRENCY_SUPPORTED', [
    'DKK',
    'EUR',
    'NOK',
    'SEK',
    'USD'
  ]),

  'default' => env('CURRENCY_DEFAULT', 'DKK')
];
