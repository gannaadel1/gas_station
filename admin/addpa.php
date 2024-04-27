<?php
include("../shared/connection.php");
include("../shared/nava.php");

if(isset($_POST['add']))
{
    $name=$_POST['name'];
    $image=$_POST['image'];
    $content=$_POST['content'];
    $insert="INSERT INTO `partner` VALUES(NULL,'$name','$image','$content')";
    $run_insert=mysqli_query($connect,$insert);
    header("location: /gas_station/admin/partner_table.php");
}


$update1 = false; 
$name = "";
$image = "";
if(isset($_GET['edit']))
{
    $update1=true;
    $id=$_GET['edit'];
    $select= " SELECT * FROM `partner` WHERE `partner_id` =$id";
    $run_select=mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($run_select);
    $name = $array['partner_name'];
    $image = $array['partner_image'];
    $content=$array['partner_content'];
  if(isset($_POST['update']))
  {
    $name=$_POST['name'];
    $image=$_POST['image'];
    $content=$_POST['content'];
    $update="UPDATE `partner` SET `partner_name`='$name',`partner_image` ='$image',`partner_content` ='$content' WHERE `partner_id` =$id";
    $run_update=mysqli_query($connect,$update);
    header("location: /gas_station/admin/partner_table.php");
    
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
                <label class="h4 form-control-label" for="input1">Partner Name<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="text" class="form-control" value="<?php echo $name ; ?>" name="name" id="input1" required>

            </div>
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">Partner Image<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="file" class="form-control" value="<?php echo $image ; ?>" name="image" id="input1" required>
            </div>
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">Partner content<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="text" class="form-control" value="<?php echo $content ; ?>" name="content" id="input1" required>
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