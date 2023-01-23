<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$incidentTypes = $db->query('select * from incident_types')->get();


view("incident-types/index.view.php", [
    'heading' => 'Dashboard',
    'incidentTypes' => $incidentTypes,
]);