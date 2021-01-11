<?php
include 'models/doctor-model.php';

class DoctorController extends Doctor {

    public function createDoctor($title, $firstname, $lastname){
        $this-> addDoctor($title, $firstname, $lastname);
    }

    public function validationCheck($title, $firstname, $lastname) {
        if(empty($title) || empty($firstname) || empty($lastname)) {
            header('Location: create.php?=emptyTextFields');
        } else if(!preg_match("/^[a-zA-Z\s]+$/", $firstname)) {
            header('Location: create.php?=invaildFirstname');
        } else if(!preg_match("/^[a-zA-Z\s]+$/", $lastname)){
            header('Location: create.php?=invaildLastname');
        } else {
            DoctorController::createDoctor($title, $firstname, $lastname);
            header('Location: create.php?=success');
        }
    }
}
?>