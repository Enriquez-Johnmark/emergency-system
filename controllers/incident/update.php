<?php
use Core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);

// echo $config;



// if (! Validator::string($_POST['description'], 1, 55)) {
//     $errors['description'] = 'Description is Required';
// }
$reportId = $db->query('select * from reports where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

// return view("incident/edit.view.php", [
//     'heading' => 'Edit Respondent Type',
//     'reportId'    => $reportId,
//     'errors' => $errors
// ]);


$db->query('UPDATE reports SET respondent_id=:respondent_id, triage=:triage, message=:message, status=:status WHERE id=:id', [
    'id'            => $_POST['id'],
    'respondent_id' => $_POST['respondent_id'],
    'triage'        => $_POST['triage'],
    'message'       => $_POST['message'],
    'status'        => $_POST['status']
]);


// dd($d1);
$_SESSION['message'] = "Successfully Updated the Status";
header('location: /incident?id='.$_GET['id']);
// header('location: /incident-type');
die();
