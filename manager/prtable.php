<?php
include("../shared/connection.php");
include("../shared/navm.php");

$select = "SELECT * FROM `product` ";
$run_select = mysqli_query($connect , $select);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>prtable</title>
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
            <th>ID</th>
            <th>Name</th>
            <th>type</th>
            <th>price</th>
            <th>quantity</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($run_select as $record ) {?>
    
    <tr>
        <td><?php echo $record["product_id"];?></td>
        <td><?php echo $record["product_name"];?></td>
        <td><?php echo $record["product_type"];?></td>
        <td><?php echo $record["product_price"];?></td>
        <td><?php echo $record["product_quantity"];?></td>
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