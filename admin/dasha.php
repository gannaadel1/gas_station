<?php
include("../shared/connection.php");
include("../shared/nava.php");

$queryuser="SELECT  COUNT(*) AS countuser FROM `user`";
$query_result_user=mysqli_query($connect,$queryuser);
while($record= mysqli_fetch_assoc($query_result_user))
{
    $outputuser = $record['countuser'];
}
$queryfeedback="SELECT  COUNT(*) AS countfeedback FROM `feedback`";
$query_result_feedback=mysqli_query($connect,$queryfeedback);
while($record= mysqli_fetch_assoc($query_result_feedback))
{
    $outputfeedback = $record['countfeedback'];
}
$queryroles="SELECT  COUNT(*) AS countroles FROM `roles`";
$query_result_roles=mysqli_query($connect,$queryroles);
while($record= mysqli_fetch_assoc($query_result_roles))
{
    $outputroles = $record['countroles'];
}
$querypartners="SELECT  COUNT(*) AS countpartners FROM `partner`";
$query_result_partners=mysqli_query($connect,$querypartners);
while($record= mysqli_fetch_assoc($query_result_partners))
{
    $outputpartners = $record['countpartners'];
}
$queryorders="SELECT  COUNT(*) AS countorders FROM `orders`";
$query_result_orders=mysqli_query($connect,$queryorders);
while($record= mysqli_fetch_assoc($query_result_orders))
{
    $outputorders = $record['countorders'];
}
$queryproduct="SELECT  COUNT(*) AS countproduct FROM `product`";
$query_result_product=mysqli_query($connect,$queryproduct);
while($record= mysqli_fetch_assoc($query_result_product))
{
    $outputproduct = $record['countproduct'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../manager/dash.css">
</head>
 <body>
    <div class="centerflipcards">
        <div class="square-flip">
            <div class='square' data-image="https://images.unsplash.com/photo-1477313372947-d68a7d410e9f?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb">
                <div class="square-container">
                    <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas2.png" class="boxshadow" alt=""></div>
                    <div class="icon"></class><i class="fa-solid fa-handshake"></i></div>
                    <h1 class="textshadow">Partners</h1>
                </div>
                <div class="flip-overlay"></div>
            </div>
            <div class='square2' data-image="https://images.unsplash.com/photo-1477313372947-d68a7d410e9f?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb">
                <div class="square-container2">
                    <div class="align-center"></div>
                    <h2><?php echo $outputpartners; ?></h2>
                </div>
                <div class="flip-overlay"></div>
            </div>
        </div>
    
        <div class="square-flip">
            <div class='square' data-image="http://titanicthemes.com/files/flipbox/kallyas-bundle.png">
                <div class="square-container">
                    <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas.png" class="boxshadow" alt=""></div>
                    <div class="icon"></class><i class="fa-solid fa-users"></i></div>
                    <h1 class="textshadow">Users</h1>
                </div>

                <div class="flip-overlay"></div>
            </div>
            <div class='square2' data-image="http://titanicthemes.com/files/flipbox/kallyas-bundle.png">
                <div class='square2' data-image="https://images.unsplash.com/photo-1477313372947-d68a7d410e9f?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb">
                    <div class="square-container2">
                        <div class="align-center"></div>
                        <h2><?php echo $outputuser; ?> </h2>
                    </div>
                    <div class="flip-overlay"></div>
                </div>
                <div class="flip-overlay"></div>
            </div>
        </div>
        <div class="square-flip">
            <div class='square' data-image="https://instagram.fotp3-2.fna.fbcdn.net/t51.2885-15/e35/14712096_386502691740262_2357154798815412224_n.jpg?ig_cache_key=MTM2NzU2MzUwNjQ3OTUzOTgxNQ%3D%3D.2">
                <div class="square-container">
                    <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas2.png" class="boxshadow" alt=""></div>
                    <div class="icon"></class><i class="fa-solid fa-user-tie"></i></div>
                    <h1 class="textshadow">Roles</h1>
                </div>
                <div class="flip-overlay"></div>
            </div>
            <div class='square2' data-image="http://titanicthemes.com/files/flipbox/kallyas-wedding.jpg">
                <div class="square-container2">
                    <div class="align-center"></div>
                    <h2><?php echo $outputroles; ?></h2>
                </div>
                <div class="flip-overlay"></div>
            </div>
        </div>
        <div class="square-flip">
            <div class='square' data-image="http://titanicthemes.com/files/flipbox/kallyas-bundle.png">
                <div class="square-container">
                    <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas.png" class="boxshadow" alt=""></div>
                    <div class="icon"></class> <i class="fa-solid fa-comments"></i></div>
                    <h1 class="textshadow">FeedBacks</h1>
                </div>
                <div class="flip-overlay"></div>
            </div>
            <div class='square2' data-image="http://titanicthemes.com/files/flipbox/kallyas-bundle.png">
                <div class='square2' data-image="https://images.unsplash.com/photo-1477313372947-d68a7d410e9f?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb">
                    <div class="square-container2">
                        <div class="align-center"></div>
                        <h2> <?php echo $outputfeedback; ?></h2>
                    </div>
                    <div class="flip-overlay"></div>
                </div>
                <div class="flip-overlay"></div>
            </div>
        </div>



        <div class="square-flip">
            <div class='square' data-image="http://titanicthemes.com/files/flipbox/kallyas-bundle.png">
                <div class="square-container">
                    <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas.png" class="boxshadow" alt=""></div>
                    <div class="icon"></class> <i class="fa-solid fa-list"></i></div>
                    <h1 class="textshadow">Orders</h1>
                </div>
                <div class="flip-overlay"></div>
            </div>
            <div class='square2' data-image="http://titanicthemes.com/files/flipbox/kallyas-bundle.png">
                <div class='square2' data-image="https://images.unsplash.com/photo-1477313372947-d68a7d410e9f?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb">
                    <div class="square-container2">
                        <div class="align-center"></div>
                        <h2> <?php echo $outputorders; ?> </h2>
                    </div>
                    <div class="flip-overlay"></div>
                </div>
                <div class="flip-overlay"></div>
            </div>
        </div>




        <div class="square-flip">
            <div class='square' data-image="http://titanicthemes.com/files/flipbox/kallyas-bundle.png">
                <div class="square-container">
                    <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas.png" class="boxshadow" alt=""></div>
                    <div class="icon"></class><i class="fa-brands fa-product-hunt"></i></div>
                    <h1 class="textshadow">Products</h1>
                </div>
                <div class="flip-overlay"></div>
            </div>
            <div class='square2' data-image="http://titanicthemes.com/files/flipbox/kallyas-bundle.png">
                <div class='square2' data-image="https://images.unsplash.com/photo-1477313372947-d68a7d410e9f?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb">
                    <div class="square-container2">
                        <div class="align-center"></div>
                        <h2><?php echo $outputproduct; ?></h2>
                    </div>
                    <div class="flip-overlay"></div>
                </div>
                <div class="flip-overlay"></div>
            </div>
        </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="..manager/dash.js"></script>
 </body>
</html>