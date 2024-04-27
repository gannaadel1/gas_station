<?php
        include ('../shared/connection.php');
        $searched = false;
        if(isset($_POST['btnSearch']))
        {
          $searched = true;
            $sch= $_POST['src'];
            $select = "SELECT * FROM `product` where `product_name` like '%$sch%'";
            $run_select = mysqli_query($connect , $select);
        } 
        
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Search</title>
            <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        </head>
        <body>
            <form method="post">
                <div class="main">
                    <div class="input-group">
                        <input type="text" class="form-control" name="src" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" name="btnSearch" type="submit"> Search
                            <i class="fa fa-search"></i>
                            </button>
    </div>
    </div>
    </div>
    </form>
    <?php if($searched) 
    { ?>
            <ul class="cards">
            <?php 
           while ($row = mysqli_fetch_assoc($run_select)){
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
    
<?php } ?>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        </body>
        </html>
