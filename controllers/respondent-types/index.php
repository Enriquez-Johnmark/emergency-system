<?php
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$respondentTypes = $db->query('select * from respondent_types')->get();



view("respondent-types/index.view.php", [
    'heading' => 'Dashboard',
    'respondentTypes'   => $respondentTypes
]);