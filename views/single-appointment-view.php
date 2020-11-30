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
     <div class="container">
        <div class="row">
         <div class="col-md-12 col-sm-12">
         <div class="panel panel-default">
            <div class="panel-heading">Appointment Information</div>
              <div class="panel-body">
                 <?php echo "Appointment number: ". $appointment["id"]; ?>
                 <br>
                 <?php echo "First Name:". $appointment["first_name"] ?>
                 <br>
                 <?php echo "Last Name:". $appointment["last_name"] ?>
                 <br>
                 <?php echo "Doctor: ". $appointment["doctor"]; ?>
                 <br>
                 <?php echo "Date: ". $appointment["date"]; ?>
                 <br>
                 <?php echo "Time: ". $appointment["time"]; ?>
                 <br>
                  <?php echo substr($appointment["comment"], 0, 40); ?>
                 </div><!--End of panel-body-->
             </div><!--End of panel panel-default-->
          </div><!--End of col-md-12 col-sm-12-->
        </div><!--End of row-->
      </div><!--End of container-->
   </main> 


   <?php
  include('includes/footer.php')
  ?>
   </body>
</html> 
