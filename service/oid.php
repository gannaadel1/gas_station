<?php
include ("../shared/connection.php");
include ("../shared/navl.php");
if(isset($_POST['log']))
{
    $oid=$_POST['oid'];
    $_SESSION['order_id']= $oid;
    $select="SELECT * FROM `orders` WHERE `order_id` = '$oid'";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    $array=mysqli_fetch_assoc($run_select);
    if($row>0)
    {
      // $_SESSION["cart"] = array();
      // $_SESSION['user_id']=$array['user_id'];
      
      header("location: /gas_station/service/payment.php");
    }
    else
    {
      echo "wrong";
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
    <link rel="stylesheet" href="../service/log.css">

</head>
<body>
<section class="forms-section">
    <h1 class="section-title"></h1>
    <div class="forms">
      
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Login
          <span class="underline"></span>
        </button>
        <form method="post" class="form form-login">
          <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
              <label for="login-phonenumber">Order ID</label>
              <input id="login-phonenumber" name="oid" type="number" required>
            </div>
          </fieldset>
          <button type="submit" name="log" class="btn-login">Login</button>
        </form>
  </section>
  <script src="../service/log.js"> </script>
  <br>
  <br>
  <br>

</body>
</html>