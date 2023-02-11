<?php
use Core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


// admin = 1
// dispatcher = 2
// user = 3




$q1 = $db->query('INSERT INTO users(
    first_name,
    middle_name,
    last_name,
    mobile_no,
    dob,
    gender,
    roles,
    email,
    password

    ) VALUES(
        :first_name, 
        :middle_name,
        :last_name,
        :mobile_no,
        :dob,
        :gender,
        :roles,
        :email,
        :password
    )',
    [
        'first_name'    => $_POST['first_name'],
        'middle_name'   => $_POST['middle_name'],
        'last_name'     => $_POST['last_name'],
        'mobile_no'     => $_POST['mobile_no'],
        'dob'           => date('Y-m-d', strtotime($_POST['dateofBirth'])),
        'gender'        => $_POST['gender'],
        'roles'         => $_POST['roles'],
        'email'         => $_POST['email'],
        'password'      => $_POST['password']
        
    ]);

$_SESSION['message'] = "Successfully Created Dispatcher.";
header('location: /dispatchers');
// header('location: /incident-type');
die();
