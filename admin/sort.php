<?php
include('../shared/connection.php');





$sort = false;

if(isset($_POST['btnSort']))
{
   $sort = true;
 $sch= $_POST['sort'];
 if($sch == "Gas")
 {
 $myquery = "SELECT * FROM `product`WHERE `product_type` = 'gas'";
 $result = mysqli_query($connect , $myquery); 
 }
else if($sch == "solar")
{
$myquery = "SELECT * FROM `product`WHERE `product_type` = 'solar'";
$result = mysqli_query($connect , $myquery); 
}
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort</title>
 </head>
 <body>
<form method="POST">
<select name = "sort">
<option value="Gas"> Gas </option>
<option value="solar"> Solar </option>
</select>
<div class="input-group-append">
<button class="btn btn-secondary" name="btnSort" type="submit"> Sort
<i class="fa fa-search"></i>
</button>
</div>
</form>
<ul class="cards">
<?php 
while ($row = mysqli_fetch_assoc($result)){
?>
<li class="cards_item">
<div class="card">
<div class="card_content">
<p class="card_title"><i class="fa-solid fa-user"></i>&emsp;<?php echo $row['product_name'];?></p>
<br>
<p class="card_text"><i class="fa-solid fa-location-dot"></i>&emsp;<?php echo $row['product_type'];?></p>
<p class="card_text"><i class="fa-solid fa-phone"></i>&emsp;<?php  echo $row['product_price'];?></p>
<p class="card_text"><i class="fa-solid fa-phone"></i>&emsp;<?php  echo $row['product_quantity'];?></p>
</div>

</div>
</li>
<?php }?>
</ul>    
 </body>
 </html>
