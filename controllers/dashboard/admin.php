<?php


use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);



// Pending = 0
// Ongoing = 2
// Done = 1
$countPending = $db->query('select count(*) as pending from reports where status=0')->rowCount();
$countOngoing = $db->query('select count(id) as ongoing from reports where status=2')->rowCount();
$countCompleted = $db->query('select count(id) as completed from reports where status=1')->rowCount();


view("dashboard/admin.view.php", [
    'heading'               => 'Dashboard',
    'countPending'          => $countPending,
    'countOngoing'          => $countOngoing,
    'countCompleted'        => $countCompleted,
]);