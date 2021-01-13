<footer>
   <div class="footer">
    <p>Copyright &copy; 2019 All Rights Reserved by Daniel Connolly </p>
   </div>
   <div class="modal fade" id="footerFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enter Doctors name</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" name="registration" id="newModalForm">
                <div class="form-group">
                      <div class="dropdown">
                        <select class="form-control" name="title" id="title">
                        <option>Mr</option>
                        <option>Dr</option>
                        <option>Mrs</option>
                        <option>Miss</option>
                        </select>
                      </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name"/>
                </div>
                <div class="form-group">
							   <input type="submit" name="doctor" class="btn btn-lg btn-success btn-block" value="Submit">
							</div>
                </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade example-modal-lg" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remove a Doctor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-12">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped">
                      <tr>
                      <th>Title</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Doctor</th>
                      </tr>
                      <?php
                          $doctors = new DoctorController;
                          $doctors->showDoctor();
                      ?>
                      </table>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 </footer>