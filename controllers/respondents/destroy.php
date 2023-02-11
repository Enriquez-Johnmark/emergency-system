<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$db->query('delete from respondents where id = :id', [
    'id' => $_POST['id']
]);


$_SESSION['message'] = "Successfully Deleted Respondent";
header('location: /respondents');
exit();
