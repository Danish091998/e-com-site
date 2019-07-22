<?php

include("includes/connection.php");

// 1. for checking color availability
if($_POST['check'] == "color"){

    $typeShirt = $_POST["type"];
    $tShirtQuery = "SELECT * FROM `customs` WHERE SHIRTTYPE = '$typeShirt'";
    $tShirtQueryResult = mysqli_query($conn, $tShirtQuery);
    
    while($result = mysqli_fetch_array($tShirtQueryResult)){
        $name        = $result['SHIRTTYPE'];
        $colorimg    = $result['COLORIMG'];
        $quantity    = $result['QUANTITY'];
        $color       = $result['COLORCODE'];  

        if($quantity>0){
            $colorAvail .= "<label class='radio-inline'> 
            <input type='radio' name='colour' value='black'>
            <div class='form-color-circle' style='background:$color;'></div>
            </label>";
        }
    }

    echo $colorAvail;
}

?>