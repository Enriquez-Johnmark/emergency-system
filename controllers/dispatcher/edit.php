<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// $currentUserId = 1;

$dispatcherId = $db->query('select * from users where id = :id AND roles=2', [
    'id' => $_GET['id']
])->findOrFail();

// authorize($note['user_id'] === $currentUserId);

view("dispatcher/edit.view.php", [
    'heading' => 'Edit Dispatcher',
    'dispatcherId' => $dispatcherId,
    'errors'    => []
]);
