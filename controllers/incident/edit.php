<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// $currentUserId = 1;

$reportId = $db->query('select * from reports where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


$reportUser = $db->query('select * from users where id = :id', [
    'id' => $reportId['user_id']
])->findOrFail();

$incident = $db->query('select * from incident_types where id = :id', [
    'id' => $reportId['incident_type_id']
])->findOrFail();


$respondents = $db->query('select * from respondents')->get();

view("incident/edit.view.php", [
    'heading' => 'Incident Information',
    'reportId' => $reportId,
    'reportUser'   => $reportUser,
    'incident' => $incident,
    'respondents' => $respondents,
    'errors'    => []
]);