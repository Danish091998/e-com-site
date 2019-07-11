<?php

    include('includes/connection.php');

    if(isset($_POST['submit-form'])){

        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
            return $formData;
        }

        $error = "";
        $tType = "";

        if($_POST["tShirtType"]){
            $tTyype = validateFormData( $_POST["tShirtType"] );
        }
        else{
            $error .= "Please select the shirt type.";
        }

        if($_POST["printType"]){
            
        }
        else{
            $error .= "Please select the print style.";
        }

        if($_POST["design"]){
            
        }
        else{
            $error .= "Please select the design.";
        }

        if($_POST["colour"]){
            
        }
        else{
            $error .= "Please select the colour of shirt.";
        }

        if($_POST["quantity"]){
            
        }
        else{
            $error .= "Please select the number of shirts you want.";
        }

        if($_POST["contact"]){
            
        }
        else{
            $error .= "Please enter your contact number.";
        }
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
        
        <div class="container top-margin">
            <!--            ADD YOUR CODE HERE-->
        </div> 

        <form class="container container-fluid" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" enctype="multipart/form-data" > 

            <?php echo $error; ?>
            
            <div class="form-group">
                <label for="shirtType">Select the type of shirt:</label><br>
                
                   <label class="radio-inline"> 
                        <input type="radio" name="tShirtType" value="tshirt">
                        <img src="http://placehold.it/100x100/0bf/fff&text=A">
                    </label>   
                    <label class="radio-inline"> 
                        <input type="radio" name="tShirtType" value="polo">
                        <img src="http://placehold.it/100x100/0bf/fff&text=B">
                    </label>    
                    <label class="radio-inline"> 
                        <input type="radio" name="tShirtType" value="dryfit">
                        <img src="http://placehold.it/100x100/0bf/fff&text=C">
                    </label>    
            </div>

        
            <div class="form-group">
                <label for="shirtType">Select the type of shirt:</label><br>
            
                <label class="checkbox-inline"> 
                    <input type="checkbox" name="printType" value="front">
                    Front
                </label>   
                <label class="checkbox-inline"> 
                    <input type="checkbox" name="printType" value="back">
                    Back
                </label>    
                <label class="checkbox-inline"> 
                    <input type="checkbox" name="printType" value="pocekt">
                    Pocket
                </label>     
            </div>
            
            <div class="form-group">
            <label for="design">Upload the photo of your design</label><br>
                <input type="file" name="design" accept="image/*">
            </div>

            <div class="form-group">
                <label for="colour">Select the colour of shirt:</label><br>
                
                   <label class="radio-inline"> 
                        <input type="radio" name="colour" value="white">
                        <img src="http://placehold.it/100x100/0bf/fff&text=A">
                    </label>   
                    <label class="radio-inline"> 
                        <input type="radio" name="colour" value="black">
                        <img src="http://placehold.it/100x100/0bf/fff&text=B">
                    </label>    
                    <label class="radio-inline"> 
                        <input type="radio" name="colour" value="green">
                        <img src="http://placehold.it/100x100/0bf/fff&text=C">
                    </label>    
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" placeholder="how many pieces do you want?">
            </div>

            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="tel" class="form-control" id="contact" placeholder="contact number">
            </div>

            <button type="submit" class="btn btn-primary" name="submit-form">Submit</button>
        </form>   

    </body>
        <!--        Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/customize.js"></script>
</html>