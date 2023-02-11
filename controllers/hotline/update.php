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
    $errors['number'] = 'Description is Required';
}

$hotlineId = $db->query('select * from hotlines where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

if (! empty($errors)) {
    return view("hotlines/edit.view.php", [
        'heading' => 'Add Incident Type',
        'hotlineId'    => $hotlineId,
        'errors' => $errors
    ]);
} 





$db->query('UPDATE hotlines SET name=:name, number=:number WHERE id=:id', [
    'id'    => $_POST['id'],
    'name' => $_POST['name'],
    'number' => $_POST['number']
]);

$_SESSION['message'] = "Successfully Updated Hotline";
header('location: /hotlines');
// header('location: /incident-type');
die();
