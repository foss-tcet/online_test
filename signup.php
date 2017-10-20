  <!-- Modal -->
  <div class="modal fade" id="signup" role="dialog" onload="clearInputs()">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
        <form action="" method="post">
  <div class="form-group">
    <label for="fname">First Name:</label>
    <input type="email" class="form-control" name="fname">
  </div>
  <div class="form-group">
    <label for="lname">Last Name:</label>
    <input type="text" class="form-control" name="lname">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
   <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearInputs()">Close</button>
        </div>
      </div>
      
    </div>
  </div>
