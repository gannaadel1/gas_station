<?php
include ("../shared/connection.php");
include ("../shared/nav.php");
if(isset($_POST['s']))
{
  header("location: /gas_station/site/services.php");
}
if(isset($_POST['p']))
{
  header("location: /gas_station/site/part.php");
}
if(isset($_POST['r']))
{
  header("location: /gas_station/site/reviews.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../site/home.css">
    <title></title>
  </head>
  <body>
    <section class="main">
    </section>
    <section class="about">
      <img src="../images/gas1.jpg" alt="">
      <div class="text">
        <h2>VOLTA</h2>
        <p> is an energy company that produces and markets fuels, natural gas and electricity. <br>
        Our goal is to provide better energy that is more affordable, more reliable, cleaner and accessible to as many people as possible. </p>
      </div>
    </section>

    <section class="price">
      <div class="text">
        <h2>Perfect Quality</h2>
        <p>Ensuring the best quality for our customers in every service we provide</p>
      </div>
      <img src="../images/gas3.jpg" alt="">
    </section>

<form method="POST">
    <section class="cards">
      <div class="card">
        <img src="../images/service.png" alt="">
        <div class="info">
          <h3>Services</h3>
          <button type="submit" name="s">view</button>
        </div>
      </div>
      <div class="card">
        <img src="../images/partners.png" alt="">
        <div class="info">
          <h3>Partners</h3>
          <button  type="submit" name="p">view</button>
        </div>
      </div>
      <div class="card">
        <img src="../images/points.png" alt="">
        <div class="info">
          <h3>Reviews</h3>
         <button type="submit" name="r">view</button>
        </div>
      </div>
    </section>
</form>
<?php
include("../shared/footer.php");
?>
  </body>
</html>

  