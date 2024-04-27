<?php
include ("../shared/connection.php");
include ("../shared/nav.php");
if(isset($_POST['send']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $id=$_SESSION['user_id'];
    $insert=" INSERT INTO `feedback` VALUES (NULL,'$name','$email','$message',$id)";
    $run = mysqli_query($connect,$insert);
    // if($run){
    //   echo "true";
    // }
    // else{
    //   echo "error";
    // }
    // header("location:register.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="../site/feed.css">
    <link rel="stylesheet" href="../shared/nav.css">

</head>
<body>
<section class="forms-section">
    <h1 class="section-title">FeedBack</h1>
    <div class="forms">
      <div class="form-wrapper is-active">
        
         
        </button>
        <form class="form form-login">
          <fieldset>
            <img src="../images/Volta.png" width="280px" >
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
              
            </div>
          </fieldset>
          
        </form>
      </div>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          click here to leave your message
        </button>
        <form class="form form-signup" method="POST">
          <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
             
            <div class="input-block">
              <label for="signup-message">Full Name</label>
              <input id="signup-message" name="name" type="text" required>
              <label for="signup-message">Email</label>
              <input id="signup-message" name="email" type="email" required>
              <label for="signup-message">your message</label>
              <input id="signup-message" name="message" type="text" required>
            </div>
            
          
          </fieldset>
          <button type="submit" name="send" class="btn-signup">Send</button>
        </form>
      </div>
    </div>
  </section>
  <script src="../site/feed.js"> </script>
  <?php
   include ("../shared/footer.php");
  ?>
</body>
</html>
