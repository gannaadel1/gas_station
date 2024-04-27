<?php
include ('../shared/connection.php');
$select = "SELECT * FROM `product`";
$run_select = mysqli_query($connect , $select);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trusted Places</title>
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../admin/trust.css">
</head>
<body>
  <br>
        <h1>Product</h1>
    <ul class="cards">
<?php foreach($run_select as $data){?>
        <li class="cards_item">
          <div class="card">
            <div class="card_content">
              <p class="card_title"><i class="fa-solid fa-user"></i>&emsp;<?php echo $data['product_type'];?></p>
              <br>
              <p class="card_text"><i class="fa-solid fa-location-dot"></i>&emsp;<?php echo $data['product_price'];?></p>
              <p class="card_text"><i class="fa-solid fa-phone"></i>&emsp;<?php echo "0"; echo $data['product_quantity'];?></p>
            </div>
          </div>
        </li>
        <?php }?>
        </ul>
        <?php
        ?>
</body>
</html>