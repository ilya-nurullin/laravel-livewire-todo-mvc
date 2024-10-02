<footer class="footer"
        style="display: block;"><span class="todo-count">
        <strong>{{ $left }}</strong> items left
    </span>
    <ul class="filters">
        <li><a href="#"
               wire:click="setFilter('all')"
               @if($activeFilter === 'all') class="selected" @endif>All</a></li>
        <li><a href="#"
               wire:click="setFilter('active')"
               @if($activeFilter === 'active') class="selected" @endif>Active</a></li>
        <li><a href="#"
               wire:click="setFilter('completed')"
               @if($activeFilter === 'completed') class="selected" @endif>Completed</a></li>
    </ul>
    <button class="clear-completed"
            style="display: none;"></button>
</footer>
