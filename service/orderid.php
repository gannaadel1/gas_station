<?php
include('../shared/connection.php');
$select = "SELECT * FROM `orders` ORDER BY `order_id` DESC limit 1";
$run_select = mysqli_query($connect, $select);
if(isset($_POST['done']))
{
  header("location: /gas_station/service/log.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="orderid.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<section class="zed">
  <figure class="snip1390">
    <figcaption>
    <?php foreach($run_select as $record) { ?>
      <blockquote><?php echo "YOUR ORDER ID IS "; ?> <br> <?php echo $record['order_id'] ; ?></blockquote>
      <?php } ?>
      <form action="" method="post">
        <button name="done" class="done btn btn-primary"> done </button>
      </form>
    </figcaption>
  </figure>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>