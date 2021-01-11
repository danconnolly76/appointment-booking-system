<?php
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire'); 
include_once "helpers/auth.php";
//include 'models/doctor-model.php';
include 'controller/doctorController.php';
include 'models/appointment-model.php';
$errors = array('emptyboxes'=>'', 'first-name-length'=>'', 'first-name-check'=>'', 'last-name-length'=>'', 'last-name-check'=>'');
$docs = Doctor::getAllDoctors();
 /*
  * Checks to see if submit button set and if textboxes are empty.
  * Checks first and last name for string length and character input with regular expression.
  */
if(isset($_POST['appointment_button']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $comment = validate_form($_POST['comment']);
	if(empty($first_name) || empty($last_name) || empty($date) || empty($time) || empty($comment))
	{
        $errors['emptyboxes'] = 'Must fill out all boxes';
        
    } else if(strlen($first_name) >= 40) {

        $errors['first-name-length'] = 'Exceeded character length for name';
        
    } else if(!preg_match("/^[A-Z]+[A-Za-z\s]+$/", $first_name)){

        $errors['first-name-check'] = 'Enter valid first name starting with a capital letter';

    } else if(strlen($last_name) >= 50) {

        $errors['last-name-length'] = 'Exceeded character length for name';

    } else if(!preg_match("/^[A-Z]+[A-Za-z\s]+$/", $last_name)) {

        $errors['last-name-check'] = 'Enter valid first name starting with a capital letter';

    }  else {
        Appointment::createAppointment($first_name, $last_name, $doctor, $date, $time, $comment);
        header ('Location: create.php');
		exit;

	}	
}
$controller_object = new DoctorController; 
if(isset($_POST['doctor']))
{
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
    $firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = !empty($_POST['lastname']) ? $_POST['lastname'] : '';
    $controller_object->validationCheck($title, $firstname, $lastname); 
}
function validate_form($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
include 'views\create-appointment-view.php';
?>
