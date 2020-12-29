<footer>
   <div class="footer">
    <p>Copyright &copy; 2019 All Rights Reserved by Daniel Connolly </p>
   </div>
   <div class="modal fade" id="footerFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enter your contact details</h5>
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
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required/>
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required/>
                </div>
  
                <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
 </footer>