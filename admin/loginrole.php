<?php
include ('../shared/connection.php');
if (isset($_POST['submit']))
{
    $phone = $_POST['phone'];
    $select = "SELECT * FROM `user` WHERE `user_phone` = '$phone'";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    $array = mysqli_fetch_assoc($run_select);
    if($row > 0)
    {
        $_SESSION['user_id'] = $array['user_id'];
        header("location: /gas_station/admin/orders.php");
    }
    else
    {
        echo "wrong data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    

</head>
<body>
<section class="forms-section">
    <h1 class="section-title">Registeration</h1>
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Login
          <span class="underline"></span>
        </button>
        <form class="form form-login" method="POST">
          <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
              <label for="login-phonenumber">Phone number</label>
              <input id="login-phonenumber" type="number" name="phone" required>
            </div>
          </fieldset>
          <button type="submit" name="submit" class="btn-login">Login</button>
        </form>
      </div>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Sign Up
          <span class="underline"></span>
        </button>
        <form class="form form-signup" method="POST">
          <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
              <label for="signup-firstname">Fist Name</label>
              <input id="signup-firstname" type="text" required>
            </div>
            <div class="input-block">
              <label for="signup-lastname">Last Name</label>
              <input id="signup-lastname" type="text" required>
            </div>
            <div class="input-block">
              <label for="signup-carnumber">Car Number</label>
              <input id="signup-carnumber" type="number" required>
            </div>
            <div class="input-block">
                <label for="signup-cartype">Car Type</label>
                <input id="signup-cartype" type="text" required>
            </div>
          </fieldset>
          <button type="submit" class="btn-signup">Sign Up</button>
        </form>
      </div>
    </div>
  </section>
  <script src="log.js"> </script>
