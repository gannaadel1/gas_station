<?php
include ('../shared/connection.php');
if (isset($_POST['submit']))
{
    $id = $_SESSION['user_id'];
    $date = $_POST['odate'];
    $total = $_POST['ototal'];
    $insert = "INSERT INTO `orders` VALUES (NULL, $id ,NULL, '$date' , '$total')";
    $run_insert = mysqli_query($connect, $insert);
    // $_SESSION['user'] = $array['user_id'];
    header ("location:/case2/admin/ordertable.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
<form method="POST">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">order date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputEmail3" name="odate">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">order total</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" name="ototal">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Order</button>
</form>
    
</body>
</html>