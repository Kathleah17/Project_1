<!DOCTYPE html>
<html>
<head>
    <title>Loop Statements</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    .body5 {
    background-color: #f77f00;
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
.andada-pro-type1 h1 {
  font-family: "Andada Pro", serif;
  font-optical-sizing: auto;
  font-weight: 800;
  font-style: normal;
  font-size: 80px;
}
.andada-pro-type1 h2 {
    font-family: "Andada Pro", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
    font-size: 60px;
}
.andada-pro-type1 p {
    font-family: "Andada Pro", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
    font-size: 24px;
}
.andada-pro-type1 h3 {
    font-family: "Andada Pro", serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    font-size:35px;
}
.section7{
    background-image: url(image-10.jpg);
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 700px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center;
}
.Title-box_type1 {
    background-color:none ;
    color: #f5ebe0;
    width: 100%;
    height: 50px;
    padding: 5%;
    border-radius: none;
    margin: 6% 0 10% 0;
    text-align: center;
}
.section8{
    background-color: #f48c06;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 900px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    
}
.section9{
    background-color: #f3a540;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 500px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
.table_type1{
    border: 10px dashed #ae580d;
    background-image:url(im10.jpg) ;
    width: 1200px;
    margin: 3% 5% 3% 17%;
    overflow-x:auto;
    text-align: center;
    height: 600px;
    background-repeat: no repeat;
    background-size: cover;
    background-position-y: 90%;
}
fieldset{
    border: none;
    padding: 10px;
    border-radius: 10px;
    background: linear-gradient(to right, #f2cc8f, #ffd29d);

}
</style>
<body  class="body5">
    <header>
        <a href="index2.php">
        <button class="btn"><i class="fa fa-home"></i> HOME </button>
        </a>
    </header>
    <div class="andada-pro-type1">
        <div class="section7"> 
            <div class="Title-box_type1">
                <h1>Loop Statements</h1>
            </div>
        </div>

                <?php
                $n = 5; 
                $m = 10; 

                //  n x m multiplication table using for loop
            echo"<div class= section8>";

                echo "<h2><center>Multiplication Table ($n x $m)</center></h2>";
                    echo "<table border = '1' class = table_type1  >";
                    for ($i = 1; $i <= $n; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= $m; $j++) {
                            echo "<td><p>" . ($i * $j) . "</p></td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
            echo"</div>"; /**end of section mutli table*/

            echo"<div class= section9>";
                echo"<fieldset>";
                        //  n Fibonacci series using while loop
                        echo "<h3>Fibonacci Series (n = $n)</h3>";
                        $a = 0;
                        $b = 1;
                        $count = 0;
                        echo "<p>$a, $b";
                        while ($count < $n - 2) {
                            $c = $a + $b;
                            echo ", $c";
                            $a = $b;
                            $b = $c;
                            $count++;
                        }
                        echo"</p>";


                        //  m Fibonacci series using while loop
                        echo "<h3>Fibonacci Series (m = $m)</h3>";
                        $a = 0;
                        $b = 1;
                        $count = 0;
                        echo "<p>$a, $b";
                        while ($count < $m - 2) {
                            $c = $a + $b;
                            echo ", $c";
                            $a = $b;
                            $b = $c;
                            $count++;
                        }

                        echo"</p>";
                        //  the factorial of n using do...while loop
                        echo "<h3>Factorial of $n</h3>";
                        $factorial = 1;
                        $i = 1;
                        do {
                            echo"<p>";
                            $factorial *= $i;
                            $i++;
                        } while ($i <= $n);
                        echo "Factorial of $n is $factorial";

                        echo"</p>";
                        // summation of m using do...while loop
                        
                        echo "<h3>Summation of $m</h3>";
                        $summation = 0;
                        $i = 1;
                        do {
                            echo"<p>";
                            $summation += $i;
                            $i++;
                        } while ($i <= $m);
                        echo "Summation of $m is $summation";
                        echo"</p>";
                    echo"</fieldset>";
                echo"</div>"; /**end of section Fibonacci*/

                ?>
     </div>
        <footer class="footer">
            <div class="footer-content">
                <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
            </div>
        </footer>
</body>
</html>
