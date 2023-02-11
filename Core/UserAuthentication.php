<?php
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


if($_SESSION['roles'] != '3')
{
    $_SESSION['error'] = 'Login to Access Dashboard';
    header('location: /login');
}
?>