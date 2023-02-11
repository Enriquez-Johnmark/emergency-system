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

if (! Validator::string($_POST['number'], 1, 55)) {
    $errors['number'] = 'Number is Required';
}

if (! empty($errors)) {
    return view("hotlines/create.view.php", [
        'heading' => 'Add Incident Type',
        'errors' => $errors
    ]);
} 



$q1 = $db->query('INSERT INTO hotlines(name, number) VALUES(:name, :number)', [
    'name' => $_POST['name'],
    'number' => $_POST['number']
]);

$_SESSION['message'] = "Successfully Created Hotline";
header('location: /hotlines');
// header('location: /incident-type');
die();
