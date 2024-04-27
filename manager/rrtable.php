<?php
include("../shared/connection.php");
include("../shared/navm.php");
$select="SELECT * FROM `roles`";
$selectquery=mysqli_query($connect,$select);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>rrtable</title>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="../admin/utable.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Roles table</span>
        <div class="actions">
          <a class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
          <th>ID</th>
            <th>Name</th>
            <th>phone number</th>
            <th>Job</th>
            <th>Salary</th>
            <th>Username</th>
           
          </tr>
        </thead>
        <tbody>
        <?php foreach($selectquery as $record ) {?>
    
    <tr>
        <td><?php echo $record["role_id"];?></td>
        <td><?php echo $record["role_named"];?></td>
        <td><?php echo $record["role_phone"];?></td>
        <td><?php echo $record["role_job"];?></td>
        <td><?php echo $record["role_salary"];?></td>
        <td><?php echo $record["role_username"];?></td>
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