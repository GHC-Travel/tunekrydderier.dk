<?php

namespace App\Http\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;
use function array_combine;
use function array_keys;
use function array_values;
use function collect;
use function filled;
use function preg_grep;

class SearchSelect extends Component
{
    public bool $visible = false;

    public $items = [];
    public $options = [];
    public $selected = null;
    public string $search = '';

    public function mount($items)
    {
        $this->items = Arr::isAssoc($items)
            ? $items
            : array_combine(array_values($items), $items);

        $this->options = $this->items;
    }

    public function updatedSearch()
    {
        if (filled($this->search)) {
            $this->options = collect(
                preg_grep("/^{$this->search}/i", array_keys($this->items)),
            )->flatMap(fn($key) => [$this->items[$key] => $key])
                ->flip()
                ->merge(preg_grep("/^{$this->search}/i", $this->items))
                ->toArray();
        } else {
            $this->options = $this->items;
        }
    }

    public function updatedSelected($value)
    {
        $this->emitUp('select', $value);
    }

    public function render()
    {
        return view('livewire.search-select');
    }
}
