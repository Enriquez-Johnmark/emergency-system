<?php


use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$respondentTypes = $db->query('select * from respondent_types where status = 1')->get();


view("respondents/create.view.php", [
    'heading' => 'Add Respondent',
    'respondentTypes' => $respondentTypes,
    'errors' => []
]);