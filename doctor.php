<?php
include 'models/doctor-model.php';
if(isset($_POST['doctor']))
{
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    Doctor::addDoctor($title, $firstname, $lastname);

}
include "views/read-appointment-view.php";
?>