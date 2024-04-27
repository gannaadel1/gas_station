<?php
include("../shared/connection.php");
include("../shared/nav.php");
$user = $_SESSION['user_id'];
$select = "SELECT * FROM `orders`
JOIN `user` ON `orders`.`user_id` = `user`.`user_id`
WHERE `user`.`user_id` = $user";
$run_select = mysqli_query($connect , $select);
// if (isset($_GET["delete"])){
//  $id=$_GET ["delete"];
//    $delete="DELETE FROM `orders` WHERE `order_id` =$id";
//    $deletequery = mysqli_query ($connect,$delete);
//    header ("location:/case2/admin/ordertable.php");

// }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Material Sortable Datatable</title>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="../admin/utable.css">

</head>
<body>
<!-- partial:index.partial.html -->
<?php
$queryuser="SELECT  COUNT(*) AS countorder FROM `orders`
JOIN `user` ON `orders`.`user_id` = `user`.`user_id`
WHERE `user`.`user_id` = $user";
$query_result_user=mysqli_query($connect,$queryuser);
$row = mysqli_num_rows($run_select);
$array=mysqli_fetch_assoc($run_select);
while($record= mysqli_fetch_assoc($query_result_user))
{
    $outputuser = $record['countorder'];
}
?>
<?php
if($row > 0)
{
  $_SESSION['user_id']=$array['user_id'];
  if($outputuser >="10")
  {
    echo "<br> &emsp; YOU HAVE 50EGP VOUCHER GET IT FROM VOLTA STATION <br> ";
  }
}
else
{   
  echo " ";
}
?>
<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Orders Summary</span>
        <div class="actions">
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
      <th>Order Id</th>
       <th>Date</th>
       <th>Name</th>
       <th>Phone</th>
       <th>car Number</th>
       <th>Total</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($run_select as $record){?>
    <tr>
    <td><?php echo $record["order_id"] ?></td>
    <td><?php echo $record["date"] ?></td>
    <td><?php echo $record["user_name"] ?></td>
    <td><?php echo $record["user_phone"] ?></td>
    <td><?php echo $record["car_number"] ?></td> 
    <td><?php echo $record["total"] ?></td>
    </tr>
<?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js'></script><script  src="../admin/user.js"></script>
</body>
</html>
