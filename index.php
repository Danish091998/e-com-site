<?php 
include('includes/connection.php');

//fetching Trending Shirts
$shirtQuery = "SELECT * FROM PRODUCTS";
$shirtQueryResult = mysqli_query($conn, $shirtQuery);

    if(mysqli_num_rows($shirtQueryResult) > 0){
        $break = 1;
        while( $row = mysqli_fetch_array($shirtQueryResult) ){
            $pName  = $row["P_NAME"];
            $pImage = $row["P_IMAGE"];
            $pPrice = $row["P_PRICE"];
            
            if( $break % 4 == 1){
            $products .= "<div class='row'><div class='col-sm-3'> <a href='#dead' class='card-anchor'><div class='card'>
                    <img class='card-img-top' src='$pImage'>
                    <div class='card-body'>
                        <h5 class='card-title product-name'>$pName</h5>
                        <p class='card-text product-price'>&#8377; <b>$pPrice</b></p>
                    </div>
                    </div></a>
                </div>";
            }
            else if($break % 4 ==0){
               $products .= "<div class='col-sm-3'><a href='#dead' class='card-anchor'><div class='card'>
                    <img class='card-img-top' src='$pImage'>
                    <div class='card-body'>
                        <h5 class='card-title product-name'>$pName</h5>
                        <p class='card-text product-price'>&#8377; <b>$pPrice</b></p>
                    </div>
                </div>
                </a>
                </div>
                </div><br>"; 
            }
            else{
                 $products .= "<div class='col-sm-3'><a href='#dead' class='card-anchor'><div class='card'>
                    <img class='card-img-top' src='$pImage'>
                    <div class='card-body'>
                        <h5 class='card-title product-name'>$pName</h5>
                        <p class='card-text product-price'>&#8377; <b>$pPrice</b></p>
                    </div>
                </div></a></div>";   
            }
            $break++;
        }
    }
else{
    $error = "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-commerce site</title>
        
        <!--        Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!--        Stylesheet-->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--        Top Bar-->
        <?php include('includes/top-bar.php')?>
        <!--        End of Top Bar-->
            <!--        Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/lake.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/sunset.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/yosemite-park-2933024_960_720.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--        End of Carousel-->
        
            <div class="wrapper-home">
                <h1 class="heading">Trending</h1><div class="heading-line" id="headingUnderline"></div><hr class="hr-underline">
            </div>
        
        <div class="container" style="background:white;">
                <?php echo $products;?>
            
        </div>
        
    </body>
        <!--        Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/index.js"></script>
</html>