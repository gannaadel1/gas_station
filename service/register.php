<?php
include ("../shared/connection.php");
include ("../shared/nav.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $brand=$_POST['brand'];
    $number=$_POST['number'];
    $phone=$_POST['phone'];
    $insert=" INSERT INTO `user` VALUES (NULL,'$name','$phone','$brand',$number)";
    $run = mysqli_query($connect,$insert);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<form method="POST"> 
    <br>
    <label for="name"> Full Name &emsp;&emsp;</label>
    <input size=30% type="text"  placeholder="Enter name" id="name" name="name">
    <br><br>
    <label for="phone">Phone number &emsp; </label>
    <input  size=30% type="int"  placeholder="+20" id="phone" name="phone" >
    <br><br>
    <label for="brand"> &emsp;Brand &emsp;&emsp;&emsp;</label>
    <input size=30% type="text"  placeholder="Enter car brand" id="brand" name="brand">
    <br><br>
    <label for="number">Car number &emsp;&emsp;</label>
    <input size=30% type="text"  placeholder="Enter car number" id="password" name="number">
    <br><br>
    <button class="b1" type="submit" name="submit">Submit</button>
    <br><br>
</form>
<?php

include ("../shared/footer.php");
?>
</body>
</html>