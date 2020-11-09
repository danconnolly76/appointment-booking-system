<!DOCTYPE html>
<html>
<?php
include 'includes/header.php';
?>
<body>
<header>
<?php
include 'includes/navbar.php';
?>
</header>
<main>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
	  <div class="padding_class">
    		<div class="container">
     			<div class="row">
	  				<div class="col col-sm-8 col-sm-offset-2">
		     			<div class="panel panel-default">
            				<div class="panel-heading">Create Appointment</div>
               					 <div class="panel-body">
									<div class="error"><?php echo $errors['emptyboxes'] ?></div>
									<form action="" method="post" id="form">    
										<div class="form-group">
											<label for="first_name">First name:</label>
												<input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
											</div><!--End of form-group-->
											<div class="error"><?php echo $errors['first-name-length'] ?></div>
											<div class="error"><?php echo $errors['first-name-check'] ?></div>
										<div class="form-group">
											<label for="last_name">Last name:</label>
												<input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
										</div><!--End of form-group-->
										<div class="error"><?php echo $errors['last-name-length'] ?></div>
										<div class="error"><?php echo $errors['last-name-check'] ?></div>
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
							<input type="date" name="date">
						</div><!--End of form-group-->
						<div class="form-group">
							<label for="time" class="control-label">Time</label>
							<input type="time" name="time">
						</div><!--End of form-group-->
							<div class="form-group">
								<label for="comment" class="control-label">Comment:</label>
								<textarea class="form-control clear" rows="7" name="comment" placeholder="Enter in a comment"></textarea>
							</div><!--End of form-group-->
							<div class="form-group">
							<input type="submit" name="appointment_button" id="BtnClear" class="btn btn-lg btn-success btn-block" value="Submit">
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
include 'includes/footer.php';
?>
</body>
</html>