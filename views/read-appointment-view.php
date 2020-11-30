<!DOCTYPE html>
<html>
<?php
  include "includes/header.php";
?>
<body>
<header>
<?php
include "includes/navbar.php";
?>
</header>
   <main>
   <div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Doctor</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Comment</th>
                      <th>Buttons</th>
                    </tr>
                    <?php foreach ($apps as $appointment) { ?>
                <tr>
                 <td>
                  <?php echo substr($appointment["first_name"], 0, 40); ?>
                 </td>
                 <td>
                  <?php echo substr($appointment["last_name"], 0, 40); ?>
                 </td>
                 <td>
                  <?php echo $appointment["doctor"]; ?>
                  </td>
                  <td>
                  <?php echo $appointment["date"]; ?>
                  </td>
                  <td>
                  <?php echo $appointment["time"]; ?>
                  </td>
                  <td> 
                  <?php echo strlen($appointment["comment"]) > 15 ? substr($appointment["comment"], 0, 15)."..." : $appointment["comment"]; ?> 
                  </td>
                  <td>
                     <a href='delete.php?id=<?php echo $appointment["id"];?>' class="btn btn-sm btn-danger pull-right" name="cancel_button">Cancel</a>
                     <a href='edit.php?id=<?php echo $appointment["id"];?>' class="btn btn-sm btn-warning pull-right">Update</a>
                   <a href='single.php?id=<?php echo $appointment["id"];?>' class="btn btn-sm btn-primary pull-right">Read</a>
                  </td>
                </tr>
                  <?php }?>
                    </table>
                </div>  
            </div>
        </div>    
    </div>
   </main> 
   <?php
  include('includes/footer.php')
  ?>
   </body>
</html> 

       