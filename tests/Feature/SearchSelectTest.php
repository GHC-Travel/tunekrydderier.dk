<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchSelect;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Livewire;
use Tests\TestCase;

class SearchSelectTest extends TestCase
{
    public function testCanSearchASequentialArrayOfItems()
    {
        Livewire::test(SearchSelect::class, ['items' => ['Tea', 'Spices']])
            ->set('search', 'T')
            ->assertViewHas('options', ['Tea' => 'Tea']);
    }

    public function testCanSearchAnAssociativeArray()
    {
        Livewire::test(SearchSelect::class, ['items' => ['Drink' => 'Tea', 'Food' => 'Pancake']])
            ->set('search', 'Drink')
            ->assertViewHas('options', ['Drink' => 'Tea'])
            ->set('search', 'Pancake')
            ->assertViewHas('options', ['Food' => 'Pancake']);
    }
}
