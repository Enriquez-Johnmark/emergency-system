<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$respondents = $db->query('select * from respondents')->get();


view("respondents/index.view.php", [
    'heading' => 'Dashboard',
    'respondents' => $respondents
]);