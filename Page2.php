<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Variable Decleration</title>
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
}
.Container-p2 {
    display: flex;
    justify-content: center;
    margin: 9% 5% 3% 5%; 
    background-color: rgba(79, 109, 122, 0.6);
    border-radius: 10px;
    width: 90%;
}
.Left-container {
    margin: 5% 0 0 2%; 
    width: 40%;
    border-radius: 10px;
    border: none;
    background-image: url("image-4.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center;
    height: 998px;  
    text-align: center;
}

/* Heading in Left Container */
.Left-container h1 {
    color: #3B5998;
}/*title in page 2*/
.right-p2 h2{
    font-size: 25px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: #0d1821;
}

/* Right Container Wrapper */
.right-p2 {
    display: grid;
    gap: 5px;
    margin: 25% 20% 5% 10%;
    width: 80%;
    grid-template-columns: 1fr 1fr; 
    grid-auto-rows: 90px; 
}

/* Right Container  PAGE 2*/ 
.right-container {
    display: grid;
    margin: 5% 2% 5% 0;
    background-color: #CDD6D0;
    padding: 50px; 
    border-radius: 10px;
    height: 998px;  
    box-shadow: 10px 10px 90px rgba(0, 0, 0, 0.627);
    grid-template-columns: 1fr 1fr; 
    grid-template-rows: 1fr 1fr; 
}
.container {
    display: flex;
    justify-content: space-between;
    margin: 10px auto;
}
.rect-left2{
    background-color: #a9d6e5;
    color: #4a5759;
    width: 100%;
    height: 60px;
    padding: 10% 0 10% 0;
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.032);
    display: flex;
    margin: 59% 0  0 0;
    align-items: center; 
    opacity: 0.8;
}
.rec-boxes{ /* rectangle- item*/
    padding: 10px;
    margin: 5px ; 
    background-color: #4a5759;
    color: #d6e5e3;
    border-radius: 5px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: 400;
    font-size: 20px;
    height:  50px;
}
.container-title{ /*Page0*/
    font-size: 50px;
    margin: 60% auto; 
    font-weight: bolder;
    color: #4a5759;
    text-align: center;

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
            <div class="Left-container">
                <div class="rect-left2">
                     <h1 class="container-title">Variable <br>Decleration</h1>
                </div>
            </div>  
        <div class='right-container'>
        <?php
            $num1 = 10; //Whole num
            $num2 = 20; 
            $num3 = 30; 
            $num4 = 40; 
            $num5 = 50;
            $float1 = 1.1; //Float val
            $float2 = 2.2; 
            $float3 = 3.3; 
            $float4 = 4.4; 
            $float5 = 5.5;
            $string1 = "Apple"; //String
            $string2 = "John"; 
            $string3 = "Dylan"; 
            $string4 = "Ken"; 
            $string5 = "Annie";
            $char1 = 'A'; //char
            $char2 = 'B'; 
            $char3 = 'C'; 
            $char4 = 'D'; 
            $char5 = 'E';
                $variables = [
                    "Whole Numbers" => [$num1, $num2, $num3, $num4, $num5],
                    "Floating Points" => [$float1, $float2, $float3, $float4, $float5],
                    "Strings" => [$string1, $string2, $string3, $string4, $string5],
                    "Characters" => [$char1, $char2, $char3, $char4, $char5]
                ];
                foreach ($variables as $type => $values) {
                    echo"<div class='right-p2 '>";
                    echo "<h2>$type</h2>";

                    foreach ($values as $value) {
                        echo "<div class='rec-boxes'>$value</div>";
                    }
                    echo"</div>";
                }
                echo"</div>";
        ?>

            </div> <!-- end of right container -->
        </div> <!-- end of container-p2 -->
    </div> <!-- end of container -->

    <footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
    </div>
    </footer>
</body>

</html>
