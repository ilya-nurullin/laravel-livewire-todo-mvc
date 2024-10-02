<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Todo app</title>
    @vite('resources/css/todo.css')
</head>
<body>
<section class="todoapp">
    <header class="header"><h1>todos</h1><input class="new-todo"
                                                placeholder="What needs to be done?"
                                                autofocus=""></header>
    <main class="main"
          style="display: block;">
        <div class="toggle-all-container">
            <input class="toggle-all"
                   type="checkbox">
            <label class="toggle-all-label"
                   for="toggle-all">Mark all as complete</label>
        </div>
        <ul class="todo-list">
            <li class="">
                <div class="view">
                    <input class="toggle"
                           type="checkbox">
                    <label>One</label>
                    <button class="destroy"></button>
                </div>
                <div class="input-container">
                    <input id="edit-todo-input"
                           type="text"
                           class="edit">
                    <label class="visually-hidden"
                           for="edit-todo-input">Edit Todo Input
                    </label>
                </div>
            </li>

            <li class="">
                <div class="view">
                    <input class="toggle"
                           type="checkbox">
                    <label>Two</label>
                    <button class="destroy"></button>
                </div>
                <div class="input-container">
                    <input id="edit-todo-input"
                           type="text"
                           class="edit">
                    <label class="visually-hidden"
                           for="edit-todo-input">Edit Todo Input
                    </label>
                </div>
            </li>

            <li class="">
                <div class="view">
                    <input class="toggle"
                           type="checkbox">
                    <label>Three</label>
                    <button class="destroy"></button>
                </div>
                <div class="input-container">
                    <input id="edit-todo-input"
                           type="text"
                           class="edit">
                    <label class="visually-hidden"
                           for="edit-todo-input">Edit Todo Input
                    </label>
                </div>
            </li>
        </ul>
    </main>
    <footer class="footer"
            style="display: block;"><span class="todo-count"><strong>3</strong> items left</span>
        <ul class="filters">
            <li><a href="#/"
                   class="selected">All</a></li>
            <li><a href="#/active">Active</a></li>
            <li><a href="#/completed">Completed</a></li>
        </ul>
        <button class="clear-completed"
                style="display: none;"></button>
    </footer>
</section>
<footer class="info"><p>Double-click to edit a todo</p>
    <p>Created by the TodoMVC Team</p>
    <p>Part of <a href="http://todomvc.com">TodoMVC</a></p></footer>
</body>
</html>
