<?php
include_once "dbConnection/connection.php";
class Appointment {
 /*
  * This function creates an appointment these are stored in a database
  */
public static function createAppointment($first_name, $last_name, $doctor, $date, $time, $comment)
{
    $sqlQuery = 'INSERT INTO appointments (first_name, last_name, doctor, date, time, comment) VALUES (:first_name, :last_name, :doctor, :date, :time, :comment)';
    $stmt = Connection::getConnection()->prepare($sqlQuery);
    $stmt->bindValue(':first_name', $first_name);
    $stmt->bindValue(':last_name', $last_name);
	$stmt->bindValue(':doctor', $doctor);
	$stmt->bindValue(':date', $date);
	$stmt->bindValue(':time', $time); 
	$stmt->bindValue(':comment', $comment);
    $rows = $stmt->execute();
	//Connection::closeConnection($conn);
}
/*
 * This function retrieves all appoinments from a database and orders them
 * in ascending order by date and time
 */
public static function getAllAppointments()
{
    $conn = Connection::getConnection();
    $sqlQuery = $conn->prepare("SELECT * FROM appointments ORDER BY appointment.date ASC, appointment.time ASC");
    $sqlQuery->execute();
    $app = $sqlQuery->fetchAll();
    Connection::closeConnection($conn);
    return $app;
}
public static function deleteAppointments($appointmentId)
{
    $conn = Connection::getConnection();
    $sqlQuery = $conn->prepare("DELETE FROM appointments WHERE id = :id");
    $sqlQuery->bindValue(':id',$appointmentId);
    $rows=$sqlQuery->execute();
    Connection::closeConnection($conn);
    if($rows==1){
        return true;
    }
      return false;
}
public static function getAppointmentById($appointmentId)
{
    $conn = Connection::getConnection();
    $sqlQuery = $conn->prepare("SELECT * FROM appointments WHERE id = :id");
    $sqlQuery->bindValue(':id', $appointmentId);
    $sqlQuery->execute();
    $appointment=$sqlQuery->fetch();
    Connection::closeConnection($conn);
    return $appointment;
}
public static function updateAppointment($id, $patient_name, $doctor, $date, $time, $comment)
{
    $conn = Connection::getConnection();
    $sqlQuery="UPDATE appointments SET patient_name=:patient_name, doctor=:doctor, date=:date, time=:time, comment=:comment WHERE id=:id";
    $update=$conn->prepare($sqlQuery);
    $update->bindValue(':id', $id);
    $update->bindValue(':patient_name', $patient_name);
    $update->bindValue(':doctor', $doctor);
    $update->bindValue(':date', $date);
    $update->bindValue(':time', $time);
    $update->bindValue(':comment', $comment);
    $rows=$update->execute();
    Connection::closeConnection($conn);
    if($rows==1){
        return true;
    }
      return false;
}
public static function searchAppointment($patient_name)
{
    $conn = Connection::getConnection();
    $sqlQuery = $conn->prepare("SELECT * FROM appointments WHERE id = :id");
    $sqlQuery->bindValue(':id', $patient_name);
    $sqlQuery->execute();
    $appointment=$sqlQuery->fetchAll();
    Connection::closeConnection($conn);
    return $appointment;
}
}
?>