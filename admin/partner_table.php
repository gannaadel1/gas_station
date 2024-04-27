<?php
include("../shared/connection.php");
include("../shared/nava.php");
$select="SELECT * FROM `partner`";
$selectquery=mysqli_query($connect,$select);
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete="DELETE FROM `partner` WHERE `partner_id`=$id";
    $run_delete=mysqli_query($connect,$delete);   
  }
  if(isset($_POST['add']))
 {
  header("location: /gas_station/admin/addpa.php");
 }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>partber table</title>
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
        <form method="POST"><button class="add" type="submit" name="add" ><a  class="modal-trigger waves-effect btn-flat nopadding"><i class="material-icons">person_add</i></a></button></form>
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Partner_name</th>
            <th>Partner_image</th>
            <th>Content</th>
            <th>Delete</th>
            <th>Update</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($selectquery as $record ) {?>
    
    <tr>
        <td><?php echo $record["partner_id"];?></td>
        <td><?php echo $record["partner_name"];?></td>
        <td><?php echo $record["partner_image"];?></td>
        <td><?php echo $record["partner_content"];?></td>
        <td><a class="btn btn-danger" href="../admin/partner_table.php?delete=<?php echo $record['partner_id'];?>"onclick="return confirm('Are You Sure')" ><p class="test">Delete</p></a></td>
        <td><a class="btn btn-primary" href="../admin/addpa.php?edit=<?php echo $record['partner_id'];?>"onclick="return confirm('Are You Sure')"><p class="test">Update</p></a></td>
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