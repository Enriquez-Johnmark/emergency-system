<?php
session_start();
use Core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


// if($_SERVER['REQUEST_METHOD'] == 'POST')
// {
// 	$email = $_POST['email'];
// 	$password = $_POST['password'];

// 	$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password =? LIMIT 1");
// 	$stmt->execute(array($email,$password));
// 	$row = $stmt->rowCount();
// 	$user = $stmt->fetch();

// 	if($row > 0)
// 	{
// 		$_SESSION['email'] = $user['email'];
//         $_SESSION['roles'] = $user['roles'];
// 		header('/dashboard');
        
// 	}

// }


$users = $db->query('select * from users where email = :email and password = :password', [
    'email' => $_POST['email'],
    'password' => $_POST['password']
])->find();



if($users > 0)
	{
        

        $_SESSION['auth'] = true;
        $_SESSION['id'] = $users['id'];
		$_SESSION['email'] = $users['email'];
        $_SESSION['first_name'] = $users['first_name'];
        $_SESSION['last_name'] = $users['last_name'];
        $_SESSION['roles'] = $users['roles'];
        // header('location: /dashboard');
        
        if($_SESSION['roles'] == '3') // User
        {

           
            header('location: /user');
            exit(0);
        }
        if($_SESSION['roles'] == '1' || $_SESSION['roles'] == '2') // Admin
        {
            header('location: /dashboard');
            die();
        }
        
    

        



	} else {
        $_SESSION['error'] = 'Incorrect Email or Password.';
        header('location: /login');
        die();
    }

