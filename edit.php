<?php
include_once "models/appointment-model.php";
include_once "models/doctor-model.php";

$docs = Doctor::getAllDoctors();

$appointmentId=$_GET['id'];

$appointment = Appointment::getAppointmentById($appointmentId);

include("views/edit-appointment-view.php");
?>