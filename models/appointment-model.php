<?php
include_once "dbConnection/connection.php";
class Appointment {
 /*
  * This function creates an appointment these are stored in a database
  */
public static function createAppointment($first_name, $last_name, $doctor, $date, $time, $comment)
{
    $conn = Connection::getConnection();
    $sqlQuery = 'INSERT INTO appointments (first_name, last_name, doctor, date, time, comment) VALUES (?, ?, ?, ?, ?, ?)';
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    $stmt=$conn->prepare($sqlQuery);
    $stmt->bindParam(1, $first_name);
    $stmt->bindParam(2, $last_name);
	$stmt->bindParam(3, $doctor);
	$stmt->bindParam(4, $date);
	$stmt->bindParam(5, $time); 
	$stmt->bindParam(6, $comment);
    $stmt->execute();
    Connection::closeConnection($conn);
    return $stmt;
}
/*
 * This function retrieves all appoinments from a database and orders them
 * in ascending order by date and time
 */
public static function getAllAppointments()
{
    $conn = Connection::getConnection();
    $sqlQuery = $conn->prepare("SELECT * FROM appointments ORDER BY appointments.date ASC, appointments.time ASC");
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
public static function updateAppointment($id, $first_name, $last_name, $doctor, $date, $time, $comment)
{
    $conn = Connection::getConnection();
    $sqlQuery="UPDATE appointments SET first_name=:first_name, last_name=:last_name, doctor=:doctor, date=:date, time=:time, comment=:comment WHERE id=:id";
    $update=$conn->prepare($sqlQuery);
    $update->bindValue(':id', $id);
    $update->bindValue(':first_name', $first_name);
    $update->bindValue(':last_name', $last_name);
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