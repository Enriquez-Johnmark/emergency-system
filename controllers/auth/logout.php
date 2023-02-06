<?php 
session_start();
// session_destroy();
// header('location: /login');
if(isset($_POST['logout']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['roles']);
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['first_name']);
    unset($_SESSION['last_name']);
    $_SESSION['message'] = 'You have sucessfully logout';
    header('location: /login');
    die();
}


?>