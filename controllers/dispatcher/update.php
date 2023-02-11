<?php
use Core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);

// echo $config;

// if (! Validator::string($_POST['description'], 1, 55)) {
//     $errors['description'] = 'Description is Required';
// }

$dispatcherId = $db->query('select * from users where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

if (! empty($errors)) {
    return view("dispatcher/edit.view.php", [
        'heading' => 'Edit Respondent Type',
        'dispatcherId'    => $dispatcherId,
        'errors' => $errors
    ]);
} 





$d1 = $db->query('UPDATE users SET 
    first_name=:first_name, 
    middle_name=:middle_name,
    last_name=:last_name, 
    gender=:gender, 
    dob=:dob, 
    mobile_no=:mobile_no, 
    email=:email, 
    password=:password
    
    WHERE id=:id', [
    'id'                    => $_POST['id'],
    'first_name'            => $_POST['first_name'],
    'middle_name'           => $_POST['middle_name'],
    'last_name'             => $_POST['last_name'],
    'gender'                => $_POST['gender'],
    'dob'                   => date('Y-m-d', strtotime($_POST['dateofBirth'])),
    'mobile_no'             => $_POST['mobile_no'],
    'email'                 => $_POST['email'],
    'password'              => $_POST['password']
]);



$_SESSION['message'] = "Successfully Updated Dispatcher";
header('location: /dispatchers');
// header('location: /incident-type');
die();
