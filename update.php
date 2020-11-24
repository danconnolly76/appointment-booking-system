<?php
include_once "models/appointment-model.php";
if(isset($_POST['update_button']))
{
$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name = $_POST['last_name'];
$doctor=$_POST['doctor'];
$date=$_POST['date'];
$time=$_POST['time']; 
$comment=$_POST['comment'];
		if(empty($first_name) || empty($last_name) || empty($date) || empty($time) || empty($comment))
		{
			header("Location: read.php?error=emptyTextField");
			exit();
		} else {
			Appointment::updateAppointment($id, $first_name, $last_name, $doctor, $date, $time, $comment);
			header("Location: read.php?updated");
			exit();

		}
		
}
?>