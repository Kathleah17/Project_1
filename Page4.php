<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Math Functions</title>
</head>
<style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    body {
    font-family: Arial, sans-serif;
    background-color: #E8EEEA;
    color: #333;
    line-height: 1.5;
    margin-top: -1%;
}
    header{
    background-color: #32323F;
    text-align:justify;
    font-size: 35px;
    color: white;
    position: fixed;
    width: 100%;
    padding: 1.5%;
    z-index: 1000;
}
    footer {
    background-color: #32323F; 
    color: white;           
    padding: 20px 0;        
    text-align: center;     
    position: relative;     
    width: 100%;            
    bottom: 0;
    left: 0;
    z-index: 1000;
}.btn { /*Home button*/
    border: none;
    padding: 5px 30px 9px 11px;
    font-size: 17px;
    cursor: pointer;
    background-color: #32323F;
    color: #f5f1ed;
    border-radius: 25px;
    transition: background-color 0.2s ease, transform 0.2s ease; 
}
.btn:hover { /*Home button*/
    background-color: #f4e9cd;
    border: none;
    color: #4C4E5D;
    opacity: 2;
}.Container-p2 {
    display: flex;
    justify-content: center;
    margin: 9% 5% 3% 5%; 
    background-color: rgba(79, 109, 122, 0.6);
    border-radius: 10px;
    width: 90%;
}
.container {
    display: flex;
    justify-content: space-between;
    margin: 10px auto;
}
.Left-Con4 {
    margin: 5% 0 0 10%; 
    width: 70%;
    border-radius: 10px;
    border: none;
    background-image: url("image-4.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center;
    height: 1150px;  
    text-align: center;
}
.rect-left{
        background-color: #a9d6e5;
        color: #4a5759;
        width: 100%;
        height: 50px;
        padding: 10% ;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.032);
        display: flex;
        margin: 80% 0 0 0;
        align-items: center; 
        opacity: 0.8;
}
.tp{
    font-size: 35px;
    text-align: center;
}
.rightP4{
    /*right contianer of page 4*/
    background-color: #a9d6e5;
    width: 80%;
    margin: 5% 10% 5% 0; 
    height: 1150px;
    border-radius: 10px;
    border: none;
    box-shadow: 10px 10px 90px rgba(0, 0, 0, 0.627);
    padding: 50px;
    grid-template-columns: 1fr 1fr; 
    grid-auto-rows: 90px;
}
.right_Conp4 {
    display: grid;
    margin: 5% 2% 5% 0;
    background-color:none;
    padding: 60px;
    width: 80%;
    border-radius: 10px;
    height: 880px;
    box-shadow: 10px 10px 90px rgba(0, 0, 0, 0.627);
    grid-template-columns: 1fr 1fr; 
    grid-template-rows: 1fr 1fr;
}
.page-item_type1  { /*page rectangle*/ /*Page0*/
    padding: 10px;
    margin: 5px ; 
    background-color: #4a5759;
    color: #d6e5e3;
    border-radius: 5px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: 400;
    font-size: 20px;
}
</style>
<body>
    <header>
            <a href="index2.php">
               <button class="btn"><i class="fa fa-home"></i> HOME </button>
            </a>
    </header>
    <div class="container">

        <div class="Container-p2">

            <?php

            echo"<div class = Left-Con4>";
                echo"<div class = rect-left>";
                    $floats = [5.75, 12.3, 3.14159, -7.5, 0.85];
                    $integers = [10, -4, 25, 7, 3];

                    // Display Var
                    echo "<h2><strong>Floating Point Numbers:</strong> " . implode(", ", $floats) . "</h2>";
                    echo "<h2><strong>Whole Numbers:</strong> " . implode(", ", $integers) . "</h2>";
                    echo"</div>";
                echo"</div>";


                echo"<div class= rightP4>";

                    // the cont. functions start here
                    echo"<div class = tp>";
                        echo "<h3 >Math Functions Demonstration:</h3>";
                    echo"</div>";

                echo"<div class=right_Conp4>";

                    echo"<div class = page-item_type1>";
                         echo "<p><strong>Absolute: <br></strong></p>";               //Absolute value
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p> abs({$integers[1]}) ="  .abs($integers[1]) . "</p>";               //Absolute value
                        echo"</div>";

                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Square Root:<br></strong></p>";          //Square root
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p> sqrt({$integers[2]}) = " . sqrt($integers[2]) . "</p>";          //Square root
                        echo"</div>";
                    
                    echo"<div class = page-item_type1>";  
                        echo "<p><strong>Power:<br></strong></p>";            //Power
                    echo"</div>";
                        echo"<div class = page-item_type1>";  
                            echo "<p> pow({$integers[4]}, 3) = " . pow($integers[4], 3) . "</p>";            //Power
                        echo"</div>";


                    echo"<div class = page-item_type1>";                        
                        echo "<p><strong>Round:<br></strong></p>";                  //Round
                    echo"</div>";
                        echo"<div class = page-item_type1>";                        
                            echo "<p>round({$floats[0]}) = " . round($floats[0]) . "</p>";                  //Round
                        echo"</div>";
                        
                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Cosine:<br></strong></p>";                     //Trigonometric cosine
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "cos({$floats[2]}) = " . cos($floats[2]) . "</p>";                     //Trigonometric cosine
                        echo"</div>";
                    
                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Minimum:<br></strong></p>"; //Min
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p>min(" . implode(", ", $integers) . ") = " . min($integers) . "</p>"; //Min
                        echo"</div>";
                        
                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Maximum:<br></strong></p>"; //Max
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p>max(" . implode(", ", $integers) . ") = " . max($integers) . "</p>"; //Max
                        echo"</div>";
                    
                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Natural Logarithm:<br></strong></p>";          //Logarithm
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p>log({$floats[1]}) = " . log($floats[1]) . "</p>";          //Logarithm
                        echo"</div>";
                    
                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Logarithm Base 10:<br></strong></p>";  //Logarithm (base 10)
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p>log10({$integers[2]}) = " . log10($integers[2]) . "</p>";  //Logarithm (base 10)
                        echo"</div>";
                        
                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Exponential:<br></strong></p>";            //Exponential
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p> exp({$integers[3]}) = " . exp($integers[3]) . "</p>";            //Exponential
                        echo"</div>";

                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Random Number:<br></strong></p>";                      //Random number
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p> rand(1, 100) = " . rand(1, 100) . "</p>";                      //Random number
                        echo"</div>";

                    echo"<div class = page-item_type1>";
                        echo "<p><strong>Radians to Degrees:<br></strong></p>"; //RadiansToDegrees
                    echo"</div>";
                        echo"<div class = page-item_type1>";
                            echo "<p>rad2deg({$floats[3]}) = " . rad2deg($floats[3]) . "</p>"; //RadiansToDegrees
                        echo"</div>";

                echo"</div>";
            echo"</div> ";
            ?>
        </div>
    </div>
        <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
        </div>
        </footer>
    </body>
</html>
