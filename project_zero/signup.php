<?php include "public_header.php"; ?>

<div class="row">
  <div class="col-md-6">
    <form method="post" action="signup_proc.php">
    <div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" name="username" required autocomplete="off">
    </div>

    <div class="form-group">
      <label>Email address:</label>
      <input type="email" class="form-control" name="email" required autocomplete="off">
    </div>
    
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" name="password" required>
    </div>
    
    <div class="form-group">
      <label>First Name:</label>
      <input type="firstname" class="form-control" name="firstname" required autocomplete="off">
    </div>

    <div class="form-group">
      <label>Last Name:</label>
      <input type="lastname" class="form-control" name="lastname" required autocomplete="off">
    </div>


    <button type="submit" class="btn btn-success btn-lg col-md-12">SIGN UP</button>
    </form>
  </div>
</div>


<?php include "public_footer.php"; ?>