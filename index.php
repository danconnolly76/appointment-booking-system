<?php
header('Cache-Control: no cache');
error_reporting(E_ALL);
ini_set("display_errors", 1);
include 'models/doctor-model.php';
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
        header ('Location: index.php');
		exit;

	}	
}
function validate_form($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
include 'views\create-appointment-view.php';
?>
