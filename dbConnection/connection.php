<?php
class Connection
{
public static function getConnection(){
	try{
		   $conn = new PDO('mysql:host=localhost;dbname=appointment-system', 'root', '');
		   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	    }
		catch (PDOException $exception)
		{
			echo "Oh no, there was a problem" . $exception->getMessage();
		}
		return $conn;
	}

public static function closeConnection($conn)
{
	$conn=null;
}
}
?>