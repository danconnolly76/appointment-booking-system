<?php
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire'); 
include_once "helpers/auth.php";
include "models/appointment-model.php";
include 'controller/doctorController.php';
$apps = Appointment::getAllAppointments();
$controller_object = new DoctorController; 
if(isset($_POST['doctor']))
{
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $controller_object->validationCheck($title, $firstname, $lastname);  
}
include "views/read-appointment-view.php";
?>
