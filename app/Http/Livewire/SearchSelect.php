<?php

namespace App\Http\Livewire;

use Livewire\Component;
use function filled;

class SearchSelect extends Component
{
    public bool $visible = false;
    public $options = [];
    public $selected = null;
    public string $search = '';
    public ?string $optionView = null;
    public ?string $selectedView = null;

    public function mount($options, $optionView = null, $selectedView = null, bool $visible = false)
    {
        $this->options = $options;
        $this->optionView = $optionView;
        $this->selectedView = $selectedView;
        $this->visible = $visible;
    }

    public function updatedSearch()
    {
        if (filled($this->search)) {
            $this->emitUp('search', $this->search);
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
