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

if($_POST['check'] == "print"){

    $typeShirt = $_POST["type"];
    $designQuery = "SELECT `DESIGNPOS` FROM `printtype` WHERE SHIRTTYPE = '$typeShirt'";
    $designQueryResult = mysqli_query($conn, $designQuery);

    while($result = mysqli_fetch_array($designQueryResult)){

        $print = $result['DESIGNPOS'];
        $printAvail .= "<label class='radio-inline'> 
                        <input type='radio' name='printType' value='design' class='design-radio'>
                        <p class='form-button'>$print</p>
                        </label>";
        }

        echo $printAvail;
}
?>