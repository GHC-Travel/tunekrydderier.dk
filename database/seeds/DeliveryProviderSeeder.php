<?php

use App\DeliveryProvider;
use App\Enums\Country;
use Illuminate\Database\Seeder;

class DeliveryProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $GLSPakkeshopSlagelse = DeliveryProvider::create([
            'name' => 'GLS Pakkeshop',
            'country' => Country::DNK()->key,
            'price' => 29,
            'currency' => 'DKK'
        ]);

        $GLSPakkeshopSlagelse->addresses()->createMany([
            [
                'name' => 'MM Legetøj',
                'address' => 'Korsgade 5',
                'city' => 'Slagelse',
                'provider_id' => '2080099680',
            ],
            [
                'name' => 'Shell 7-Eleven',
                'address' => 'Bjergbygade',
                'city' => 'Slagelse',
                'provider_id' => '2080099741'
            ]
        ]);
    }
}
