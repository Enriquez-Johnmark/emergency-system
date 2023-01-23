<?php
session_start();
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
    return view("respondent-types/create.view.php", [
        'heading' => 'Add Respondent Type',
        'errors' => $errors
    ]);
} 


$db->query('INSERT INTO respondent_types(name, status) VALUES(:name, :status)', [
    'name' => $_POST['name'],
    'status' => $_POST['status']
]);

$_SESSION['message'] = "Successfully Created Respondent Type";
header('location: /respondent-types');
// header('location: /incident-type');
die();
