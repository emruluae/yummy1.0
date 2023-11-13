<?php
/*
Template Name: Register Page
*/
get_header();
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
    <div class="register-form">
      <h2>Register</h2>
      <form id="registration-form" action="" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password</label>
          <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
</div>
</div>

<?php
get_footer();
?>