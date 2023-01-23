<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$respondents = $db->query('SELECT respondents.id, respondents.name, respondent_types.name AS types,respondents.team_leader, respondents.mobile_no, respondents.created_at, respondents.status
FROM respondents
INNER JOIN respondent_types  ON respondents.respondent_type_id=respondent_types.id;')->get();



view("respondents/index.view.php", [
    'heading' => 'Dashboard',
    'respondents' => $respondents
]);