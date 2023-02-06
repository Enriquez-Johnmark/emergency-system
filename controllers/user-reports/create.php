<?php


use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$incidentTypes = $db->query('select * from incident_types')->get();




view("user-reports/create.view.php", [
    'heading' => 'Request for Assistance',
    'incidentTypes' => $incidentTypes,
    'errors' => []
]);