<?php
include_once "helpers/auth.php";
include "models/appointment-model.php";
include 'models/doctor-model.php';
$errors = array('emptyboxes'=>'', 'invalid_firstname'=>'', 'invalid_lastname'=>'');
$apps = Appointment::getAllAppointments();
if(isset($_POST['doctor']))
{
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    if(empty($title) || empty($firstname) || empty($lastname)){
        $errors['emptyboxes'] = 'Must fill out all boxes';
    } else if(!preg_match("/^[a-zA-Z\s]+$/", $firstname)){
        header('Location: read.php?=invalidFirstName');
    } else {
        Doctor::addDoctor($title, $firstname, $lastname);  
    }
}
include "views/read-appointment-view.php";
?>
