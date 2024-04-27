<?php   
include ("../shared/connection.php");
if(isset($_POST['cancel']))
{
   
     header("location: /gas_station/service/log.php");
}

// unset($_SESSION["order_id"]);
// session_destroy($_SESSION["order_id"]);
class cartObject
{
    public $product_id;
    public $product_name;
    public $product_price;
    public $product_type;
    public $product_quantity;
    
    function __construct($product_id, $product_name, $product_price, $product_type, $product_quantity)
    {
        $this->product_id = $product_id;
        $this->product_name     = $product_name;
        $this->product_price    = $product_price;
        $this->product_type    = $product_type;
        $this->product_quantity    = $product_quantity;
    }
};

$total = 0;
if(isset($_POST["add_to_cart"])){
    $cart     = $_SESSION["cart"];
     $product_id = $_POST["product_id"];
     $product_name = $_POST["product_name"];
     $product_price = $_POST["product_price"];
     $product_type = $_POST["product_type"];
     $product_quantity = $_POST["product_quantity"];

$doesExist = false;
     if(count($cart) == 0){
          //lw el cart fadya
          $newItem = new cartObject($product_id, $product_name, $product_price, $product_type, $product_quantity);
            array_push($cart, $newItem);
            $_SESSION["cart"] = $cart;
            echo "Item added to cart";
     }else{
          //lw el cart mlyana bashof ele ana hadefo da mawgood wla la
          foreach($cart as $item){
               if($item->product_id == $product_id){
                    echo "Item already exists in the cart";
                    $doesExist = true;
               }
          }
          if(!$doesExist){
               $newItem = new cartObject($product_id, $product_name, $product_price, $product_type, $product_quantity);
               array_push($cart, $newItem);
               $_SESSION["cart"] = $cart;
                  echo "Item added to cart";
          }
     }

     // foreach($cart as $item){
     //      if($item->product_id == $product_id){
     //           echo "Item already exists in the cart";
     //      }else{
     //        $newItem = new cartObject($product_id, $product_name, $product_price, $product_type, $product_quantity);
     //        array_push($cart, $newItem);
     //        $_SESSION["cart"] = $cart;
     //           echo "Item added to cart";
     //      }
     // }
     
}


     if(isset($_GET["delete"])){
          $delete = $_GET["delete"];
          $cart = $_SESSION["cart"];
          unset($cart[$delete]);
          sort($cart);
          print_r($cart);
          $_SESSION["cart"] = $cart;
     }

     if(isset($_POST["purchase"])){
          $userId = $_SESSION['user_id'];
          // $date            = date('Y-m-d h:i:s');
          $total = $_POST["totalPrice"];
          $date = date('Y-m-d h:i:s');
          foreach($_SESSION["cart"] as $item){
               //3ayza adeef el cart bta3ty 3la el table el orders
               $total += $item->product_price * $item->product_quantity;
          }
          $insert = "INSERT INTO `orders` VALUES(NULL, $userId, $total, now(), '$status')";
          $insertQuery = mysqli_query($connect, $insert);
          
          foreach ($_SESSION['cart'] as $item) 
          {
               //3ayza akhod akhr order da5l w a7to fe table el order details ashofo khad kam 7aga w a7asbo
        
               $query3    = "SELECT @@IDENTITY"; //The "@@Identity" is used to get the last inserted ID in the database
               $runQuery3 = mysqli_query($connect, $query3);
               $result3   = mysqli_fetch_assoc($runQuery3);
               
               $temp      = $result3["@@IDENTITY"];
               //Inserting the order details to database
               $query4    = "INSERT INTO `orders_details` VALUES($temp, $item->product_id, $item->product_quantity)";
               $runQuery4 = mysqli_query($connect, $query4);
           }
           $_SESSION["cart"] = array();
           $total = 0;
           header("location: /gas_station/service/orderid.php");
     }

 ?> 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Shopping </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <link rel="stylesheet" href="../service/order.css">
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <style>
           .addtocart
           {
    background-color: rgb(32,28,28);
    border: none;
    width: 80px;
    height: 30px;
    border-radius: 6px;
    margin-top: 30px;
    font-size: 1.1rem;
    color: white;
    margin-top:15px;
}

.button
{
     background-color:rgb(32,28,28);
     color:white;
     width:15%;
}
.card
{
     width: 300px;
     height:360px;
}

</style>
</head>  
      <body> 
          
           <br />  
           <div class="container rows" style="width:800px; ">  
                <h1 class="main-text">Products</h1><br/>  
                <!-- <input type="date" name="date" class="form-control"/>  -->
                <?php  
                $query = "SELECT * FROM `product` ORDER BY `product_id` ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  

                         
                ?>  
                <div class="col-md-6">  
                     <form method="post">  
                          <div class="card" style="border:1px solid #333; border-radius:5px; padding:20px; margin-top:5%; " align="center">  
                               <img src="../images/Volta.png" class="img-responsive" /><br />  
                               <h4 class="text-dark"><?php echo $row["product_type"]; ?></h4>  
                               <h4 class="text-dark"> <?php echo $row["product_name"]; ?></h4>  
                               <h4 class="text-dark"> <?php echo $row["product_price"]; echo "L.E"; ?></h4>  

                               <label style="text-align:center;">Quantity</label>
                               <input type="text" name="product_quantity" class="form-control" value="1" />   
                              <input type="hidden" name="product_id" value="<?php echo $row["product_id"] ?>">
                               <input type="hidden" name="product_type" value="<?php echo $row["product_type"]; ?>" />  
                               <input type="hidden" name="product_name" value="<?php echo $row["product_name"]; ?>" />  
                               <input type="hidden" name="product_price" value="<?php echo $row["product_price"]; ?>" /> 
                               <input type="submit" name="add_to_cart" class="add btn btn-primary" value="Buy" />  
                          </div>  
                     </form>  
                </div> 
              
                <?php  
                     }  
                } 
                
                ?>  
                <div style="clear:both"></div>  
                <br><br>  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="20%">product type</th>  
                               <th width="20%">product name</th> 
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>    
                               <th width="10%">Action</th>  

                          </tr>  
                          
                          <?php   
                         //  print_r($_SESSION["cart"]);
                         //  if(!empty($_SESSION["shopping_cart"]))  
                         //  {  
                               $total = 0;  
                              //  print_r($_SESSION["shopping_cart"]);
                              $counter = 0;
                               foreach($_SESSION["cart"] as $values)  
                               {  
                          ?>  
                         <tr>  
                         <td><?php echo $values->product_type; ?></td>  
                         <td><?php echo $values->product_name; ?></td>  
                         <td><?php echo $values->product_quantity; ?></td>  
                         <td> <?php echo $values->product_price; ?></td>  
                         <td> <?php echo number_format($values->product_quantity * $values->product_price, 2); ?></td>
                         <td><a href="order.php?delete=<?php echo $counter ?>" class="btn btn-danger"><span class="remove">Remove</span></a></td>    
                         </tr>  
                          <?php  
                                    $total = $total + ($values->product_quantity * $values->product_price);
                                    $counter++;
                               }
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr> 
                          <?php  
                         //  }  
                          ?>  
                     </table> 
                </div>  
           </div>  
          
           <br/> 
           <form method="POST" >
               <input type="number"style="margin-left:10px; width:100px; font-size:15px;"  value="<?php echo $total ?>" disabled name="totalPrice" class="checkout">
               <button name="purchase"style="margin-left:10px; width:100px; font-size:15px;" class="btn btn-primary">Check</button>
            <button type="submit" style="margin-left:10px; width:100px; font-size:15px;"name="cancel" class="done btn btn-danger"> cancel </button>
          </form>
      </body> 

 </html>
 