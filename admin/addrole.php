<?php
include("../shared/connection.php");
include("../shared/nava.php");

if(isset($_POST['add']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $username=$_POST['uname'];
    $salary=$_POST['salary'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $insert="INSERT INTO `roles` VALUES(NULL,'$name','$phone','$role','$username','$salary','$password')";
    $run_insert=mysqli_query($connect,$insert);
}


$update1 = false; 
$name="";
$phone="";
$username="";
$salary="";
$password="";
$role="";
if(isset($_GET['edit']))
{
    $update1=true;
    $id=$_GET['edit'];
    $select= " SELECT * FROM `roles` WHERE `role_id`=$id";
    $run_select=mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($run_select);
    $name=$array['role_named'];
    $phone=$array['role_phone'];
    $username=$array['role_username'];
    $salary=$array['role_salary'];
    $password=$array['role_password'];
    $role=$array['role_job'];
  if(isset($_POST['update']))
  {
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $username=$_POST['uname'];
    $salary=$_POST['salary'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $update="UPDATE `roles` SET `role_named`='$name',`role_phone`='$phone' , `role_username`='$username' ,`role_salary`='$salary' , `role_password`='$password' ,`role_job`='$role' WHERE `role_id`=$id";
    $run_update=mysqli_query($connect,$update);
    header("location: /gas_station/admin/rtable.php");
    
  }
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>volta’s jobform</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin/addrole.css">
</head>
 <body>
    <div class="container my-5">
  
        
        <hr>
        
          <div class="card bg-light">
        <form class="card-body" novalidate="" action="" method="POST" id="bootstrapForm">
          
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">Name<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="text" class="form-control" value="<?php echo $name; ?>" name="name" id="input1" required>
                <div class="valid-feedback">Company name looks good</div>
                <div class="invalid-feedback">Please enter your name. This field is required</div>
            </div>
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">Phone<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="number" class="form-control" value="<?php echo $phone; ?>" name="phone" id="input1" required>

            </div>
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">User Name<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="text" class="form-control" value="<?php echo $username; ?>" name="uname" id="input1" required>
            </div>
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">Salary<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="number" class="form-control" value="<?php echo $salary; ?>" name="salary" id="input1" required>
            </div>
            <div class="form-group">
                <label class="h4 form-control-label" for="input1">Password<abbr class="text-danger" title="This is required">*</abbr></label>
                <input type="password" class="form-control" name="password" id="input1" required>
            </div> 
            <div class="custom-select selector" style="width:100%;">
                <select name="role" >
                  <option value="<?php echo $role; ?>" >Role:</option>
                  <option name="role" >manager</option>
                  <option name="role" >admin</option>
                  <option name="role" >service</option>
                  <option name="role" >cashier</option>
                </select>
                
              </div>
              <br>
              <?php if($update1){ ?>
                <button type="submit" name="update" class="btn btn-secondary">Edit</button>
            <?php } else{?>
                &emsp;<button type="submit" name="add" class="btn btn-secondary">ADD</button>
          
            <?php } ?>
        </form>
        <!-- <div class="bot">
            <button type="submit" class="btn btn-secondary">confirm</button>
          
    </div> -->
        
        </div>
        <!-- /.container -->
      <!-- linking bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="../admin/addrole.js"></script>
 </body>
</html>