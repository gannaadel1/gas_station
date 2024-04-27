<?php
include("../shared/nav.php");
include("../shared/connection.php");
$select="SELECT * FROM `feedback`";
$selectquery=mysqli_query($connect,$select);
?>

<html>
  <head>
    <link rel="stylesheet" href="reviews.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no">
  </head>
  <body>
      <section class="zed">
      <?php foreach($selectquery as $record){ ?>
  <figure class="snip1390"><img src="../images/nopic.png" alt="profile-sample5" class="profile" />
    <figcaption>
      <h2><?php echo $record['feed_name']; ?></h2>
      <h4>customer</h4>
      <blockquote><?php echo $record['feed_message']; ?></blockquote>
    </figcaption>
  </figure>
  <?php } ?>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../site/reviews.js"></script>
</body>
   </html>