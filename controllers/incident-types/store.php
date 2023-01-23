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

if (! Validator::string($_POST['description'], 1, 55)) {
    $errors['description'] = 'Description is Required';
}

if (! empty($errors)) {
    return view("incident-types/create.view.php", [
        'heading' => 'Add Incident Type',
        'errors' => $errors
    ]);
} 



$q1 = $db->query('INSERT INTO incident_types(name, description) VALUES(:name, :description)', [
    'name' => $_POST['name'],
    'description' => $_POST['description']
]);

$_SESSION['message'] = "Successfully Created Incident Type";
header('location: /incident-types');
// header('location: /incident-type');
die();
