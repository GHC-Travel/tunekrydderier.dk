<?php

namespace App\Http\Livewire;

use Livewire\Component;
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
        $this->items = $items;
        $this->options = $items;
    }

    public function updatedSearch()
    {
        if (filled($this->search)) {
            $this->options = preg_grep("/^{$this->search}/i", $this->items);
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
