<?php 
session_start();
// session_destroy();
// header('location: /login');
if(isset($_POST['logout']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['roles']);

    $_SESSION['message'] = 'You have sucessfully logout';
    header('location: /login');
    die();
}


?>