<?php
include ("../shared/connection.php");
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location: /gas_station/site/home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../shared/nav.css">
</head>
<body>
    <!--This is the NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid cont">
                  <a class="navbar-brand" href="#">
                    <img src="../images/Volta..png" alt="" width="140" height="80" class="d-inline-block align-text-mid">
                  </a>
                  <?php if(isset($_SESSION['role_id'])) { ?>
              <form method="post">  
              <button type="submit" name="logout" class="btn btn-danger">logout</button>
              </form>
              <?php } ?>
      </nav>
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      <script src="https://kit.fontawesome.com/486ed163d2.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>