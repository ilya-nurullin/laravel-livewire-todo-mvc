<header class="header">
    <h1>todos</h1>
    <input class="new-todo"
           placeholder="What needs to be done?"
           autofocus=""
           wire:model="text"
           wire:keyup.enter="addTodo"
    >
</header>
