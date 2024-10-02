<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class TodoItem extends Component
{
    public Todo $todo;

    public $isEditing = false;

    public function render()
    {
        return view('livewire.todo-item');
    }

    public function toggleCompleted()
    {
        $this->todo->is_completed = !$this->todo->is_completed;
        $this->todo->save();

        $this->dispatch('todo-toggled');
    }

    public function deleteTodo()
    {
        $this->todo->delete();

        $this->dispatch('todo-deleted');
    }

    public function startEditing()
    {
        $this->isEditing = true;
    }

    public function finishEditing($newTitle)
    {
        $this->isEditing = false;

        $this->todo->title = $newTitle;
        $this->todo->save();
    }
}
