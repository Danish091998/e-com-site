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
        <div class="top-margin">
            <div class="wrapper">
                <h1 class="heading">Get Your Shirts Customized :</h1><div class="heading-line" id="headingUnderline"></div><hr class="hr-underline">
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div id="tsw1" class="col-md-6 tshirt-wrap">
                <a href="customize.php"><img class="tshirt-pic" src="images/tshirt1.png"></a>
            </div>
            <div id="tsw2" class="col-md-6 tshirt-wrap">
                <a href="#dead"><img class="tshirt-pic" src="images/tshirt2.png"></a>  
            </div>
        </div>
        </div>
    </body>
        <!--        Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/index.js"></script>
</html>