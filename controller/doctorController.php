<?php
include 'models/doctor-model.php';

class DoctorController extends Doctor {

    public function createDoctor($title, $firstname, $lastname){
        $this->addDoctor($title, $firstname, $lastname);
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

    public function showDoctor() {
        $results = $this->getAllDoctors();
        if($results != null){
            foreach($results as $doctors){
                echo "<tr>";    
                echo "<td>".$doctors['title']."</td>";
                echo "<td>".$doctors['firstname']."</td>";
                echo "<td>".$doctors['lastname']."</td>";
                echo  "<td>"."<a href='#' class='btn btn-sm btn-danger pull-right' name='cancel_button'>Delete</a>"."</td>";
                echo "</tr>";
            }
        }
    }

}
?>