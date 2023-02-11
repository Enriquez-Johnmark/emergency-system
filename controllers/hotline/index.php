<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$hotlines = $db->query('select * from hotlines')->get();


view("hotlines/index.view.php", [
    'heading' => 'Hotlines',
    'hotlines' => $hotlines,
]);