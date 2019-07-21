<?php

    include('includes/connection.php');

    // fetching T - shirt type

    $tShirtQuery = "SELECT DISTINCT  `SHIRTTYPE`  FROM `customs`";
    $tShirtQueryResult = mysqli_query($conn, $tShirtQuery);
    
    while($result = mysqli_fetch_array($tShirtQueryResult)){
        $name = $result['SHIRTTYPE'];
    }







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
    <body class="top-margin">
        <!--        Top Bar-->
        <?php include('includes/top-bar.php')?>
        <!--        End of Top Bar-->
        
        <div class="wrapper">
            <h1 class="heading">Customization</h1><div class="heading-line" id="headingUnderline"></div><hr class="hr-underline">
            <p class="sub-heading"> Please provide us some details for the customization of your clothes, by filling the form below :</p>
        </div>
        
        <div class="container">
            <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" enctype="multipart/form-data"> 

            <?php echo $error; ?>
            
            <div class="form-group">
                <label class="form-label" for="shirtType">Select the type of tshirt :</label><br>
                
                <label class="radio-inline"> 
                    <input type="radio" name="tShirtType" value="tshirt" id="poloTshirt">
                    <img class="form-tshirt-type" src="images/polo-shirt.png">
                </label>   
                <label class="radio-inline"> 
                    <input type="radio" name="tShirtType" value="polo" id="roundTshirt">
                    <img class="form-tshirt-type" src="images/round-shirt.png">
                </label>    
                <label class="radio-inline"> 
                    <input type="radio" name="tShirtType" value="dryfit" id="dryTshirt">
                    <img class="form-tshirt-type" src="images/dry-fit.png">
                </label>    
            </div>
                
            <div class="form-group">
                <label class="form-label" for="printType">Select the part of tshirt where you want your design :</label><br>
                
                <label class="radio-inline"> 
                    <input type="radio" name="printType" value="front" id="front" class="design-radio">
                    <p class="form-button">Front</p>

                </label>   
                <label class="radio-inline"> 
                    <input type="radio" name="printType" value="back" id="back" class="design-radio">
                    <p class="form-button">Back</p>

                </label>    
                <label class="radio-inline"> 
                    <input type="radio" name="printType" value="frontback" id="fback" class="design-radio">
                    <p class="form-button">Front + Back</p>
                </label>  
                <label class="radio-inline"> 
                    <input type="radio" name="printType" value="pocket" id="pocket" class="design-radio">
                    <p class="form-button">Pocket</p>
                </label>
            </div>
                
            
<!--
            <div class="form-group">
                <label class="form-label" for="design">Upload the photo of your design :</label><br>
                <input type="file" name="design" accept="image/*">
            </div>
-->
                
            <div class="form-group">
                <label class="form-label" for="design">Upload the photo of your design :</label><br>
                <div class="file-upload">
                    <div class="file-select">
                        <div class="file-select-button" id="fileName">Choose File</div>
                        <div class="file-select-name" id="noFile">No file chosen...</div> 
                        <input type="file" name="chooseFile" id="chooseFile" name="design" accept="image/*">
                    </div>
                </div>
            </div>
                
            <div class="form-group" id="optionalUpload" style="display:none;">
                <div class="file-upload-opt">
                    <div class="file-select">
                        <div class="file-select-button" id="fileNameOpt">Choose File</div>
                        <div class="file-select-name" id="noFileOpt">No file chosen...</div> 
                        <input type="file" name="chooseFileOpt" id="chooseFileOpt" name="designOpt" accept="image/*">
                    </div>
                </div>
                <small>Please upload design image for back of tshirt .</small>
            </div>

            <div class="form-group">
                <label class="form-label" for="colour">Select the colour of tshirt :</label><br>
                
                   <label class="radio-inline" id="color1"> 
                        <input type="radio" name="colour" value="black">
                        <img class="form-tshirt-color" src="images/tshirt-colors/color1.png">
                    </label>   
                    <label class="radio-inline" id="color2"> 
                        <input type="radio" name="colour" value="white">
                        <img class="form-tshirt-color" src="images/tshirt-colors/color2.png">
                    </label>    
                    <label class="radio-inline" id="color3"> 
                        <input type="radio" name="colour" value="blue">
                        <img class="form-tshirt-color" src="images/tshirt-colors/color3.png">
                    </label>    
            </div>

            <div class="form-group">
                <label class="form-label" for="contact">Contact Number :</label>
                <input type="tel" class="form-control form-contact" id="contact" placeholder="contact number">
            </div>
                <br>
            <div style="text-align:center;"><button type="submit" class="form-checkout-button" name="submit-form">Proceed to checkout</button></div>
        </form>   
            </div> 
    </body>
        <!--        Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/customize.js"></script>
</html>