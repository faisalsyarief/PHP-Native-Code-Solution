<?php
$todos = [];
function addTodoItem($item) {
    global $todos;
    $todos[] = $item;
    return $todos;
}
print_r(addTodoItem("Learn PHP"));