<?php

$config = require __DIR__ . '/../config.php';

require_once __DIR__ . '/../vendor/autoload.php';

require 'router.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Request.php';
require 'User.php';


return new QueryBuilder(
    Connection::make($config['database'])
);