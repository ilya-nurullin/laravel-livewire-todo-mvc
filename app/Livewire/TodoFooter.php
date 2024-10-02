<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class TodoFooter extends Component
{
    #[Reactive]
    public $left = 0;

    #[Reactive]
    public $activeFilter = 'all';

    public function render()
    {
        return view('livewire.todo-footer');
    }

    public function setFilter($newFilter)
    {
        $this->dispatch('set-filter', $newFilter);
    }
}
