<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// $currentUserId = 1;

$respondentId = $db->query('select * from respondents where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

$respondentTypes = $db->query('select * from respondent_types where status = 1')->get();

// authorize($note['user_id'] === $currentUserId);

view("respondents/edit.view.php", [
    'heading' => 'Edit Respondent',
    'respondentId' => $respondentId,
    'respondentTypes' => $respondentTypes,
    'errors'    => []
]);
