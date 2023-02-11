<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// $currentUserId = 1;

$hotlineId = $db->query('select * from hotlines where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

// authorize($note['user_id'] === $currentUserId);

view("hotlines/edit.view.php", [
    'heading' => 'Edit Incident Type',
    'hotlineId' => $hotlineId,
    'errors'    => []
]);
