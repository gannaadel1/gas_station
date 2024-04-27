<?php
include("../shared/connection.php");
include("../shared/nav.php");

$select="SELECT * FROM `partner`";
$selectquery=mysqli_query($connect,$select);
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Partners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="part.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php foreach($selectquery as $record){ ?>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                       <img src="<?php echo $record["partner_image"]; ?>">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                    <?php echo $record["partner_name"]; ?>
                    </h3>
                    <p><?php echo $record["partner_content"]; ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php 
include("../shared/footer.php");
 ?>
</body>

</html>