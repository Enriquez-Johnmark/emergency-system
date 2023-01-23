<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// $currentUserId = 1;

$respondentTypeId = $db->query('select * from respondent_types where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

// authorize($note['user_id'] === $currentUserId);

view("respondent-types/edit.view.php", [
    'heading' => 'Edit Respondent Type',
    'respondentTypeId' => $respondentTypeId,
    'errors'    => []
]);
