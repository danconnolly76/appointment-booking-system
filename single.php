<?php
include_once "models/appointment-model.php";
include_once "models/doctor-model.php";

$appointmentId=$_GET['id'];

$appointment = Appointment::getAppointmentById($appointmentId);

require "views/single-appointment-view.php";
?>