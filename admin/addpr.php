<?php
include("../shared/connection.php");
include("../shared/nava.php");

if(isset($_POST['add']))
{
    $name=$_POST['name'];
    $type=$_POST['type'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $insert="INSERT INTO `product` VALUES(NULL,'$name','$type','$price','$quantity')";
    $run_insert=mysqli_query($connect,$insert);
    header("location: /gas_station/admin/product_table.php");
}


$update1 = false; 
$name = "";
$type = "";
$price ="";
$quantity="";
if(isset($_GET['edit']))
{
    $update1=true;
    $id=$_GET['edit'];
    $select= " SELECT * FROM `product` WHERE `product_id`=$id";
    $run_select=mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($run_select);
    $name = $array['product_name'];
    $type = $array['product_type'];
    $price=  $array['product_price'];
    $quantity= $array['product_quantity'];
  if(isset($_POST['update']))
  {
    $name=$_POST['name'];
    $type=$_POST['type'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $update="UPDATE `product` SET `product_name`='$name',`product_type`='$type',`product_price`=$price,`product_quantity`='$quantity' WHERE `product_id`=$id";
    $run_update=mysqli_query($connect,$update);
    header("location: /gas_station/admin/product_table.php");
    
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin/addpr.css">
</head>
 <body>
    <div class="container my-5">
        <hr>
        
          <div class="card bg-light">
        <form class="card-body"  method="POST" id="bootstrapForm">
          
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">product name<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="text" class="form-control" value="<?php echo $name ; ?>" name="name" id="input1" required>

            </div>
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">product type<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="text" class="form-control" value="<?php echo $type ; ?>" name="type" id="input1" required>
            </div>
           
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">price<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="number" class="form-control"value="<?php echo $price ; ?>" name="price" id="input1" required>
            </div>  

            <div class="form-group">
                <label class="h4 form-control-label" for="input1">Quantity<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="number" class="form-control"value="<?php echo $quantity ; ?>" name="quantity" id="input1" required>
            </div>  
         
            
          <?php if($update1){ ?>
                <button type="submit" name="update" class="btn btn-secondary">Edit</button>
            <?php } else{?>
                &emsp;<button type="submit" name="add" class="btn btn-secondary">ADD</button>
          
            <?php } ?>
          <!-- <div class="bot">
                <button type="submit" name="add" class="btn btn-secondary">Add</button>   
        </div> -->
        </form>
        
        
        </div>
        <!-- /.card -->
        
        </div>
        <!-- /.container -->
      <!-- linking bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="../admin/addpr.js"></script>
 </body>
</html>