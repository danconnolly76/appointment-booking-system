<?php
header('Cache-Control: no cache');
error_reporting(E_ALL);
ini_set("display_errors", 1);
include 'models/doctor-model.php';
include 'models/appointment-model.php';
$errors = array('emptyboxes'=>'', 'patient-name'=>'');
$docs = Doctor::getAllDoctors();
 /*
  * Checks to see if submit button set and if textboxes are empty.
  * If submit button is set and all textboxes calls function in Appointment.
  */
if(isset($_POST['appointment_button']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $doctor=$_POST['doctor'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $comment=$_POST['comment'];
	if(empty($first_name) || empty($last_name) || empty($date) || empty($time) || empty($comment))
	{
        $errors['emptyboxes'] = 'Must fill out all boxes';
        
    } else if(strlen($first_name) >= 50) {
        $errors['patient-name'] = 'Exceeded character length for name';
         
    } else {
        Appointment::createAppointment($first_name, $last_name, $doctor, $date, $time, $comment);
        header ('Location: index.php');
		exit;

	}
		
}
include 'views\create-appointment-view.php';
?>
