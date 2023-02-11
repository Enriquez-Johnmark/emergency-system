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

// if (! Validator::string($_POST['description'], 1, 55)) {
//     $errors['description'] = 'Description is Required';
// }

$respondentId = $db->query('select * from respondents where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

if (! empty($errors)) {
    return view("respondents/edit.view.php", [
        'heading' => 'Edit Respondent Type',
        'respondentId'    => $respondentId,
        'errors' => $errors
    ]);
} 





$db->query('UPDATE respondents SET name=:name,status=:status WHERE id=:id', [
    'id'    => $_POST['id'],
    'name' => $_POST['name'],
    'status' => $_POST['status']
]);



$_SESSION['message'] = "Successfully Updated Respondents";
header('location: /respondents');
// header('location: /incident-type');
die();
