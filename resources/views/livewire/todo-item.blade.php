<li class="@if($todo->is_completed) completed @endif
@if($isEditing) editing @endif">
    <div class="view">
        <input class="toggle"
               type="checkbox"
               wire:input="toggleCompleted"
               @if($todo->is_completed) checked @endif
        >
        <label wire:dblclick="startEditing">{{ $todo->title }}</label>
        <button class="destroy" wire:click="deleteTodo"></button>
    </div>
    <div class="input-container">
        <input id="edit-todo-input"
               type="text"
               class="edit"
               value="{{ $todo->title }}"
               wire:blur="finishEditing($event.target.value)"
               wire:keyup.enter="finishEditing($event.target.value)"
        >
        <label class="visually-hidden"
               for="edit-todo-input">Edit Todo Input
        </label>
    </div>
</li>
