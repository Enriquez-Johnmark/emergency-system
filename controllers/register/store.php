<?php
session_start();
use Core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);

// echo $config;

// $errors = [];

// if (! Validator::string($_POST['name'], 1, 55)) {
//     $errors['name'] = 'Name is Required';
// }

// if (! Validator::string($_POST['description'], 1, 55)) {
//     $errors['description'] = 'Description is Required';
// }

// if (! empty($errors)) {
//     return view("incident-types/create.view.php", [
//         'heading' => 'Add Incident Type',
//         'errors' => $errors
//     ]);
// } 

// $dob = date('Y-m-d', strtotime($_POST['dateofBirth']));

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
    street,
    barangay,
    city,
    province,
    country,
    zipcode,
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
        :street,
        :barangay,
        :city,
        :province,
        :country,
        :zipcode,
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
        'street'        => $_POST['street'],
        'barangay'      => $_POST['barangay'],
        'city'          => $_POST['city'],
        'province'      => $_POST['province'],
        'country'       => $_POST['country'],
        'zipcode'       => $_POST['zipcode'],
        'roles'         => $_POST['roles'],
        'email'         => $_POST['email'],
        'password'      => $_POST['password']
        
    ]);

$_SESSION['message'] = "Registration sucessful.";
header('location: /login');
// header('location: /incident-type');
die();
