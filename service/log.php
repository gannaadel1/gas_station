<?php
include ("../shared/connection.php");
include ("../shared/navl.php");
if(isset($_POST['sign']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $brand=$_POST['brand'];
    $number=$_POST['number'];
    $select = "SELECT * FROM `user` WHERE `user_phone` = '$phone' OR `car_number`='$number' ";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    if($row>0)
    {
        echo "Phone or car number are taken";
    }
    else
    {
        $insert="INSERT INTO `user` VALUES(NULL,'$name','$phone','$brand','$number')";
        $run_insert=mysqli_query($connect,$insert);
        $select="SELECT * FROM `user` WHERE `user_phone`=$phone";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    $array=mysqli_fetch_assoc($run_select);
    $_SESSION["cart"] = array();
    $_SESSION['user_id']=$array['user_id'];
        header("location: /gas_station/service/order.php");
    }
}
if(isset($_POST['log']))
{
    $phone=$_POST['phone'];
    $select="SELECT * FROM `user` WHERE `user_phone`=$phone";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    $array=mysqli_fetch_assoc($run_select);
    if($row>0)
    {
      $_SESSION["cart"] = array();
      $_SESSION['user_id']=$array['user_id'];
      header("location: /gas_station/service/order.php");
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
              <label for="login-phonenumber">Phone number</label>
              <input id="login-phonenumber" name="phone" type="number" required>
            </div>
          </fieldset>
          <button type="submit" name="log" class="btn-login">Login</button>
        </form>
      </div>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Sign Up
          <span class="underline"></span>
        </button>
        <form method="post" class="form form-signup">
          <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
              <label for="signup-firstname">Full Name</label>
              <input id="signup-firstname" name="name"type="text" required>
            </div>
            <div class="input-block">
            <label for="phone">Phone number &emsp; </label>
           <input  size=30% type="int"  id="phone" name="phone" >
            </div>
            <div class="input-block">
              <label for="signup-carnumber">Car Number</label>
              <input id="signup-carnumber" name="number" type="text" required>
            </div>
            <div class="input-block">
                <label for="signup-cartype">Car Type</label>
                <input id="signup-cartype" name="type" type="text" required>
            </div>
          </fieldset>
          <button type="submit" name="sign" class="btn-signup">Sign Up</button>
        </form>
      </div>
    </div>
  </section>
  <script src="../service/log.js"> </script>
  <?php
  include ("../shared/footer.php");
  ?>
</body>
</html>