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


// if (! empty($errors)) {
//     return view("respondents/create.view.php", [
//         'heading' => 'Add Respondent',
//         'errors' => $errors
//     ]);
// } 

///C:/xampp/htdocs/emergency/photos/11.PNG
    // Set image placement folder
    // $target_dir = BASE_PATH.'photos/';
    // Get file path
    $target_dir = "photos/";
        // Get file path
        $target_file = $target_dir . basename($_FILES["photos"]["name"]);
        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("jpg", "jpeg", "png");
    // dd($target_file);    
    if (!in_array($imageExt, $allowd_file_ext)) {
        
            $_SESSION['error'] = "Allowed file formats .jpg, .jpeg and .png.";
            header('location: /reports');
       
    } else if ($_FILES["error"]["size"] > 10485760) {
   
            $_SESSION['message'] = "File is too large. File size should be less than 10 megabytes.";
            header('location: /reports');
    } 
    else {
        if (move_uploaded_file($_FILES["photos"]["tmp_name"], $target_file)) {

            $db->query('INSERT INTO reports(user_id, incident_type_id,comments,photos, latitude, longitude, status) 
                VALUES(:user_id,:incident_type_id,:comments,:photos, :latitude,:longitude, :status)', 
                [
                'user_id' => $_POST['user_id'],
                'incident_type_id' => $_POST['incident_type_id'],
                'comments' => $_POST['comments'],
                'photos' => $target_file,
                'latitude' => $_POST['latitude'],
                'longitude' => $_POST['longitude'],
                'status' => $_POST['status']
                ]);

            $_SESSION['message'] = "You have successfully submit the request";
            header('location: /user');
            // header('location: /incident-type');
            die();
        } 
    }

