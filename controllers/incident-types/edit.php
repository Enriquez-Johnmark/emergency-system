<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// $currentUserId = 1;

$incidentId = $db->query('select * from incident_types where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

// authorize($note['user_id'] === $currentUserId);

view("incident-types/edit.view.php", [
    'heading' => 'Edit Incident Type',
    'incidentId' => $incidentId,
    'errors'    => []
]);
