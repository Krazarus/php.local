<?php

$tasks = $query->selectAll('todos');

require 'views/index/index.view.php';
