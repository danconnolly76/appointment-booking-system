<?php
 include_once "dbConnection/connection.php";
class Doctor {
  /*
   * This function access all the doctors in the database and places them
   * in an array.
   */
   public static function getAllDoctors()
   {
       $conn = Connection:: getConnection();
       $sqlQuery = $conn->prepare("SELECT * FROM doctors");
       $sqlQuery->execute();
       $doctors =  $sqlQuery->fetchAll();
       Connection::closeConnection($conn);
	     return $doctors;
   }
}	
?>