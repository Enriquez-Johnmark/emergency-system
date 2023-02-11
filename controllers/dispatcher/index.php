<?php
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$dispatchers = $db->query('select * from users where roles=2')->get();



view("dispatcher/index.view.php", [
    'heading' => 'Dispatchers',
    'dispatchers'   => $dispatchers
]);