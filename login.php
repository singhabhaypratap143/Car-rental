<!DOCTYPE html>
<html>
<?php
require 'head.php';
?>
<body class="bg-img">
<?php
require 'header1.php';
?>
  <div class="container">
  <div class="row">
     <div class="col-sm-4"></div>
       <div class="col-sm-4" style="padding-top:20px;padding-bottom:">
        <form method="post" action="login_script.php">
        <div class="card border">
        <div class="card-header bg text-center text-light"><h3>Login</h3></div>
<div class="card-body">
<h4 class="text-center text-info">Login to book car</h4>

<b>Email:</b>
<input class="form-control" type="email" placeholder="Email address" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
<b>Password:</b>
<input class="form-control" type="password" placeholder="**************" name="password" required="true" pattern=".{6,}">
</div>

  <div class="card-footer">
    <center>
<input class="btn bg text-light" type="submit" name="login" value="Login" style="font-size: 1.3em">
</center>
<hr>
  <div>Don't have an account? <a href="signup.php"> Register</a></div>
  <div>Go to home page <a href="index.php"> Home</a></div>
  </div> 

</div>
</form>
</div>
<div class="col-sm-4"></div>
</div>
</div>
<div class="fixed-bottom">
<?php
include ("footer.php");
?>
</div>
</body>
</html>
<style>
.bg-img {
  background-image: url("");
  min-height: ;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.bg {
  background-color: #105469 !important;
}

</style>