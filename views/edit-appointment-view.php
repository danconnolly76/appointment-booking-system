
<!DOCTYPE html>
<html>
<?php
  include('includes/header.php')
?>
<body>
<header>
<?php
include 'includes/navbar.php';
?>
</header>
<main>
  <div class="padding_class">
    <div class="container">
     <div class="row">
	  <div class="col-md-8 col-md-offset-2">
		    <div class="panel panel-default">
          <div class="panel-heading">Update Appointment</div>
            <div class="panel-body">
	   <form  action="update.php" method="post">
		   <input type="hidden" name="id" value="<?php echo $appointment["id"]; ?>">  
		  <div class="form-group">
			<label for="patient_name">First name:</label>
			<input type="text" class="form-control" name="first_name" value="<?php echo $appointment["first_name"]; ?>" >
		  </div><!--End of form-group-->
		  <div class="form-group">
			<label for="patient_name">Last name:</label>
			<input type="text" class="form-control" name="last_name" value="<?php echo $appointment["last_name"]; ?>" >
		  </div><!--End of form-group-->
		  <div class="form-group">
			<label for="doctor">Doctor:</label>
			<div class="dropdown">
                <select id="doctor" class="form-control" name="doctor">
                    <?php foreach ($docs as $doctor) { ?>
						<option value='<?php echo $doctor["firstname"]." ".$doctor["lastname"] ?>'><?php echo $doctor["title"]." ".$doctor["firstname"]." ".$doctor["lastname"] ?></option>
                    <?php } ?>
                    </select>
            </div>
		  </div><!--End of form-group-->
		    <div class="form-group">
			  <label for="date" class="control-label">Date</label>
            <input type="date" name="date" value="<?php echo $appointment["date"]; ?>">
		    </div><!--End of form-group-->
		    <div class="form-group">
            <label for="time" class="control-label">Time</label>
            <input type="time" name="time" value="<?php echo $appointment["time"]; ?>">
		    </div><!--End of form-group-->
			  <div class="form-group">
           <label for="comment" class="control-label">Comment:</label>
             <textarea class="form-control" rows="7" name="comment"><?php echo $appointment["comment"]; ?></textarea>
             </div><!--End of form-group-->
			   <div class="form-group">
		       <input type="submit" name="update_button" class=" btn btn-lg btn-success btn-block" value="Update">
					</div>
		  	</form>
				    </div>
				   </div>
				  </div>
			  </div><!--col-md-8 col-md-offset-2-->
	     </div><!--End of row-->
		</div><!--End of container-->
		</div>
</main>

<?php
  include('includes/footer.php')
?>

</body>
</html>
