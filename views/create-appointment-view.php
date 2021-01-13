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
<br>
	  <div class="padding_class pb-5">
    		<div class="container">
     			<div class="row justify-content-center">
	  				<div class="col col-sm-8">
		     			<div class="card">
            				<div class="card-header">Create Appointment</div>
               					 <div class="card-body">
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
													<?php foreach ($doctors as $doctor) { ?>
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
<br>
<?php
include 'includes/footer.php';
?>
</body>
</html>