<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoInput extends Component
{
    public $text = '';

    public function render()
    {
        return view('livewire.todo-input');
    }

    public function addTodo()
    {
        $todo = new Todo();

        $todo->user_id = Auth::id();
        $todo->title = $this->text;
        $todo->is_completed = false;

        $todo->save();

        $this->text = '';

        $this->dispatch('todo-created');
    }
}
