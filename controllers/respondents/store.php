<?php
use Core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);

// echo $config;

$errors = [];

if (! Validator::string($_POST['name'], 1, 55)) {
    $errors['name'] = 'Name is Required';
}


if (! empty($errors)) {
    return view("respondents/create.view.php", [
        'heading' => 'Add Respondent',
        'errors' => $errors
    ]);
} 



$db->query('INSERT INTO respondents(name, status) 
    VALUES(:name,:status)', 
    [
    'name' => $_POST['name'],
    'status' => $_POST['status']
    ]);

$_SESSION['message'] = "Successfully Created Respondents";
header('location: /respondents');
// header('location: /incident-type');
die();
