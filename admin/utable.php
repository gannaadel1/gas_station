<?php
include("../shared/connection.php");
include("../shared/nava.php");
$select="SELECT * FROM `user`";
$selectquery=mysqli_query($connect,$select);
if(isset($_GET["delete"])){
  $id=$_GET["delete"];
    $delete="DELETE FROM `user` WHERE `user_id` = $id";
    $deletequery = mysqli_query($connect,$delete);
    header("location: /gas_station/admin/utable.php");
 }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>utable</title>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="../admin/utable.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Users table</span>
        <div class="actions">
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
          <th>ID</th>
            <th>Name</th>
            <th>phone number</th>
            <th>Car Brand</th>
            <th>Car Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($selectquery as $record ) {?>
    
    <tr>
        <td><?php echo $record["user_id"];?></td>
        <td><?php echo $record["user_name"];?></td>
        <td><?php echo $record["user_phone"];?></td>
        <td><?php echo $record["car_brand"];?></td>
        <td><?php echo $record["car_number"];?></td>
        <td><a class="btn btn-danger" href="../admin/utable.php?delete=<?php echo $record['user_id']; ?>" onclick="return confirm('Are you sure?')"><p class="test">Delete</p></a></td>
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