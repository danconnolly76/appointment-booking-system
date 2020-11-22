<?php
include_once "models/appointment-model.php";

$pointmentid = $_GET['id'];

if(Appointment::deleteAppointments($pointmentid) == true){
    $apps = Appointment::getAllAppointments();
    include('views/read-appointment-view.php');    
}


?>