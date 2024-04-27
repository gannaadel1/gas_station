<?php
include("../shared/connection.php");
include("../shared/nav.php");
if (isset($_POST['login']))
{
    $phone = $_POST['phone'];
    $id=$_POST['id'];
    $select = "SELECT * FROM `user` WHERE `user_phone` = '$phone' AND `user_id` = '$id' ";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    $array=mysqli_fetch_assoc($run_select);
    if($row > 0)
    {
      $_SESSION['user_id']=$array['user_id'];
      // $_SESSION['user_name']=$array['user_name'];
      // $_SESSION['user_phone']=$array['user_phone'];
      // $_SESSION['car_brand']=$array['car_brand'];
      // $_SESSION['car_number']=$array['car_number'];
      header("location: /gas_station/site/profile.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>now</title>
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- style css -->
    <link rel="stylesheet"href="../site/log22.css">
    <link rel="stylesheet" href="log22.css">
  </head>
  <body>
    <div class="page">
        <div class="container">
          <div class="left">
      <br><br>
            <div style="text-align:center" class="login">Login</div>
            <!-- <div class="eula">By logging in you agree to the ridiculously long terms that you didn't bother to read</div> -->
          </div>
          <div class="right">
            <svg viewBox="0 0 320 300">
              <defs>
                <linearGradient
                                inkscape:collect="always"
                                id="linearGradient"
                                x1="13"
                                y1="193.49992"
                                x2="307"
                                y2="193.49992"
                                gradientUnits="userSpaceOnUse">
                  <stop
                        style="stop-color:#ff00ff;"
                        offset="0"
                        id="stop876" />
                  <stop
                        style="stop-color:#ff0000;"
                        offset="1"
                        id="stop878" />
                </linearGradient>
              </defs>
              <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
            </svg>
            <svg viewBox="0 0 320 300">
              <defs>
                <linearGradient
                                inkscape:collect="always"
                                id="linearGradient"
                                x1="13"
                                y1="193.49992"
                                x2="307"
                                y2="193.49992"
                                gradientUnits="userSpaceOnUse">
                  <stop
                        style="stop-color:#ff00ff;"
                        offset="0"
                        id="stop876" />
                  <stop
                        style="stop-color:#ff0000;"
                        offset="1"
                        id="stop878" />
                </linearGradient>
              </defs>
              <path d="m 40,186.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
            </svg>
            <div class="form">
              <form method="POST">
              <label for="tel">Phone Number</label>
              <input type="phone" name="phone" id="email">
              <br>
              <label for="tel">ID</label>
              <input type="int" name="id" id="email">
              <input type="submit" name=login id="submit" value="login">
              <?php
              if (isset($_POST['login']))
    {   
      echo "<b class='err'>Wrong Number</b>";
    }
?>
            </form>
            </div>

          </div>
        </div>
      </div>
      <script src="log2.js"></script>
      <script src="../site/log2.js"></script>

</body>
</html>