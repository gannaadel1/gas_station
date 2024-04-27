<?php
include("../shared/connection.php");
include("../shared/navm.php");
$select = "SELECT * FROM `orders`
JOIN `user` ON `orders`.`user_id` = `user`.`user_id`
JOIN `product` ON `orders`.`product_id` = `product`.`product_id`";
$run_select = mysqli_query($connect , $select);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ootable</title>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="../admin/utable.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Products table</span>
        <div class="actions">
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
          <th>Order Id</th>
       <th>User Name</th>
       <th>User Phone</th>
       <th>User car</th>
       <th>Type</th>
       <th>Price</th>
       <th>Quantity</th>
       <th>Date</th>
       <th>Total</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($run_select as $record){?>
    <tr>
    <td><?php echo $record["order_id"] ?></td>
    <td><?php echo $record["user_name"] ?></td>
    <td><?php echo $record["user_phone"] ?></td> 
    <td><?php echo $record["car_number"] ?></td> 
    <td><?php echo $record["product_type"] ?></td>
    <td><?php echo $record["product_price"] ?></td>
    <td><?php echo $record["product_quantity"] ?></td>
    <td><?php echo $record["date"] ?></td>
    <td><?php echo $record["total"]?></td>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js'></script><script  src="user.js"></script>

</body>
</html>