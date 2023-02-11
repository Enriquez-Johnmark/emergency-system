<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$db->query('delete from incident_types where id = :id', [
    'id' => $_POST['id']
]);

$_SESSION['message'] = "Successfully Deleted Incident Types";
header('location: /incident-types');
exit();
