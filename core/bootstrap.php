<?php

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


function view($name, $data)
{
    extract($data);

    return require "app/views/index/{$name}.view.php";
}

function buildTree($items)
{
    if (empty($items)) {
        return [];
    }

    $childs = [];
    foreach ($items as $item) {
        $childs[$item->parent_id][$item->id] = $item;
    }
    foreach ($items as $item) {
        if (isset($childs[$item->id])) {
            $item->childs = $childs[$item->id];
        }
    }
    return $childs[0];
}