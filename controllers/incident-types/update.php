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

if (! Validator::string($_POST['description'], 1, 55)) {
    $errors['description'] = 'Description is Required';
}

$incidentId = $db->query('select * from incident_types where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

if (! empty($errors)) {
    return view("incident-types/edit.view.php", [
        'heading' => 'Add Incident Type',
        'incidentId'    => $incidentId,
        'errors' => $errors
    ]);
} 





$db->query('UPDATE incident_types SET name=:name, description=:description WHERE id=:id', [
    'id'    => $_POST['id'],
    'name' => $_POST['name'],
    'description' => $_POST['description']
]);

$_SESSION['message'] = "Successfully Updated Incident Type";
header('location: /incident-types');
// header('location: /incident-type');
die();
