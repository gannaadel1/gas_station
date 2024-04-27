<?php
include("../shared/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="../shared/tlog.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="contact">
					<form method="post">
						<h3>SIGN IN</h3>
						<input type="text" name="uname" placeholder="USERNAME">
						<input type="password" name="password" placeholder="PASSWORD">
						<button class="submit" name="login">Log in</button>
            <?php
include("../shared/connection.php");
if (isset($_POST['login']))
{
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $select = "SELECT * FROM `roles` WHERE `role_username` = '$uname' AND `role_password`='$password'";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    $array=mysqli_fetch_assoc($run_select);
    $job=$array['role_job'];
    if($row > 0)
    {
      $_SESSION['role_id']=$array['role_id'];
      if($job=="admin")
      {
       header("location: /gas_station/admin/dasha.php");
      }
      else if($job=="manager")
      {
        header("location: /gas_station/manager/dash.php");
      }
      else if($job=="service")
      {
        header("location: /gas_station/service/log.php");
      }
      else if($job=="cashier")
      {
        header("location: /gas_station/service/oid.php");
      }
      else
      {
        echo "wrong role";
      }
    }
    else
    {   
      echo " <b class='err'>Wrong Data</b>";
    }
}
?>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>Volta</h2>
					<h5>Tank running low ? you know where to go</h5>
				</div>
				
			</div>
		</div>
	</section>
</body>
</html>