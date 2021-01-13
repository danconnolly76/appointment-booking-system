<?php
 include_once "dbConnection/connection.php";
class Doctor {
  /*
   * This function access all the doctors in the database and places them
   * in an array.
   */
   public static function getAllDoctors()
   {
       $conn = Connection::getConnection();
       $sqlQuery = "SELECT * FROM doctors";
       $result = $conn->query($sqlQuery);
       $doctors = $result->fetchAll();
       Connection::closeConnection($conn);
	     return $doctors;
   }

   /*
    * This function inserts doctors into a database.
    */
    public static function addDoctor($title, $firstname, $lastname)
    {
      $conn = Connection::getConnection();
      $sqlQuery = 'INSERT INTO doctors (title, firstname, lastname) values (:title, :firstname, :lastname)';
      $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
      $stmt=$conn->prepare($sqlQuery);
      $stmt->bindValue(':title', $title);
      $stmt->bindValue(':firstname', $firstname);
      $stmt->bindValue(':lastname', $lastname);
      $stmt->execute();
      Connection::closeConnection($conn);
    }

    /*
     * This function allows doctors to be deleted from the database
     */
    public static function deleteDoctor($doctorId)
    {
      $conn = Connection::getConnection();
      $sqlQuery = $conn->prepare("DELETE FROM doctors WHERE id = :id");
      $sqlQuery->bindValue(':id',$doctorId);
      $rows=$sqlQuery->execute();
      Connection::closeConnection($conn);
      if($rows==1){
        return true;
      }
      return false;
    }

}
?>