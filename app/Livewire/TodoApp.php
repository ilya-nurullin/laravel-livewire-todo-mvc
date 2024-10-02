<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class TodoApp extends Component
{
    public $todos;
    public $activeFilter = 'all';

    protected $listeners = [
        'todo-deleted' => '$refresh',
        'todo-toggled' => '$refresh',
    ];

    public function __construct()
    {
        $this->reloadList();
    }

    #[On('todo-created')]
    public function reloadList()
    {
        $userId = Auth::id();
        $this->todos = Todo::where('user_id', $userId)->get();
    }

    #[On('set-filter')]
    public function setFilter($newFilter)
    {
        $this->activeFilter = $newFilter;
    }

    public function render()
    {
        return view('livewire.todo-app');
    }

    #[Computed]
    public function leftTodos()
    {
//        $this->todos->reject(fn ($v) => $v->is_completed)->count();
        return $this->todos->reject->is_completed->count();
    }

    #[Computed]
    public function filteredTodos()
    {
        return match($this->activeFilter) {
            'all' => $this->todos,
            'active' => $this->todos->reject->is_completed,
            'completed' => $this->todos->filter->is_completed,
        };
    }
}
