<?php
include('../shared/connection.php');
include('../shared/navc.php');
$user = $_SESSION['user_id'];
$i=$_SESSION['order_id'];
$select = "SELECT * FROM `orders`
JOIN `user` ON `orders`.`user_id` = `user`.`user_id`
WHERE `orders`.`order_id` = $i ";
$run_select = mysqli_query($connect , $select);
if(isset($_POST['done']))
{
    $method=$_POST['method'];
    $insert = "INSERT INTO `payment` VALUES (NULL, '$method', $i)";
    $run_insert = mysqli_query($connect , $insert);
    $status="Paid";
    $update="UPDATE `orders` SET `status`='$status' WHERE `order_id` =$i";
    $run_update=mysqli_query($connect,$update);
    header("location: /gas_station/service/oid.php");
}
if(isset($_POST['cancel']))
{
    header("location: /gas_station/service/oid.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <style>
        h3{
            text-align:center;
        }
        </style>
    <title> Cashier</title>
</head>
<body>
    <br>
    <br>
<!-- <h3>Order Details</h3>   -->
<div class="table-responsive">  
<table class="table table-bordered">  
<thead>
    <tr>  
        <th width="20%">ID</th>  
        <th width="20%">User ID</th> 
        <th width="10%">Total</th>  
        <th width="20%">Date</th>  
        <th width="15%">Status</th>
        <tr>                        
</thead> 
<tbody>
<?php foreach($run_select as $values){ ?>
<tr>
    <td><?php echo $values["order_id"]; ?></td>  
    <td><?php echo $values["user_id"]; ?></td>  
    <td><?php echo $values["total"]; ?></td>  
    <td> <?php echo $values["date"]; ?></td> 
    <td> <?php echo $values["status"]; ?></td> 
</tr>
<?php } ?>
</tbody>
</table>

<form method="POST">
<select name="method" class="drop-down">
    <option name="method">Cash</option>
    <option name="method">Visa</option>
</select>
<button type="submit" name="done" class="done btn btn-primary"> Done </button>
<button type="submit" name="cancel" class="done btn btn-danger"> cancel </button>
</form>

</body>
</html>