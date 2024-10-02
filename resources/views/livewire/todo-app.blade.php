<div>
    <section class="todoapp">
        <livewire:todo-input />

        <main class="main"
              style="display: block;">
            <div class="toggle-all-container">
                <input class="toggle-all"
                       type="checkbox">
                <label class="toggle-all-label"
                       for="toggle-all">Mark all as complete</label>
            </div>
            <ul class="todo-list">

                @foreach($this->filteredTodos as $todo)
                    <livewire:todo-item :key="$todo->id" :todo="$todo" />
                @endforeach
            </ul>
        </main>

        <livewire:todo-footer :active-filter="$activeFilter" :left="$this->leftTodos" />
    </section>
    <footer class="info"><p>Double-click to edit a todo</p>
        <p>Created by the TodoMVC Team</p>
        <p>Part of <a href="http://todomvc.com">TodoMVC</a></p></footer>
</div>
