<?php
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);



    if($_SESSION['roles'] != '1')
    {
        $_SESSION['error'] = 'You are not Authorized as ADMIN';
        header('location: /login');
    }

?>