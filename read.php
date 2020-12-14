<?php
include_once "helpers/auth.php";
include "models/appointment-model.php";
$apps = Appointment::getAllAppointments();
include "views/read-appointment-view.php";
?>
