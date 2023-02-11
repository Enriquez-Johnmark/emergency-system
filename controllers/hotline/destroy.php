<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$db->query('delete from hotlines where id = :id', [
    'id' => $_POST['id']
]);

$_SESSION['message'] = "Successfully Deleted Hotline";
header('location: /hotlines');
exit();
