<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Selection Statements </title>
</head>
<style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.body3 {
    background-color: #e5e5e5;
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
.container {
    display: flex;
    justify-content: space-between;
    margin: 10px auto;
}
.Container-p6 {
    display: flex;
    justify-content: center;
    margin: 9% 5% 3% 5%; /* Centering the container */
    background-color: rgba(79, 109, 122, 0.6); 
    border-radius: 10px;
    width: 90%;
}
.Container-mid{
    display: flex;
    justify-content: center;
    margin: 10% 10% 10% 10%;
    background-color: #4f6d7a9a;
    background-image: url("image-5.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center;
    background-position-y: 70%;
    border-radius: 10px;
    height: 400px;
    width: 90%;
}
.Right-lay {
    float: left; 
    width: 70%; 
    padding: 30px;
    box-sizing: border-box;
    border: none; 
    margin: 5% 0 10% 0 ;
}
.andada-pro-page6_type h2 {
  font-family: "Andada Pro", serif;
  font-weight: 800;
  font-style:normal;
  font-size: 20px;
}
.andada-pro-page6_type1 h2 {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 50px;
    color: #b3daf0;
  }

  .andada-pro-page6_type0 h2 {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 50px;
    color: #103144;
  }
  .andada-pro-page6_type0 p {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 20px;
    color: #103144;
  }
  .andada-pro-page6_type1 h1 {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 70px;
    color: #b3daf0;
  }
  
.andada-pro-page6_type h1 {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 50px;
}
.andada-pro-page6_type p {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 20px;
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

</style>

<body div class ="body3">
    <header>
            <a href="index2.php">
               <button class="btn"><i class="fa fa-home"></i> HOME </button>
            </a>
    </header>
    <div class="container">
        <div class="Container-p6">
          
                <?php
                    echo"<div class= Container-mid>";
                       

                        $strings = ["Ana", "Bentoy", "Catty", "Dante", "Eab"];
                        $numbers = [15, 3, 8, 22, 5];   
                        
                        //Sorting
                        function sortStrings(&$arr, $asc = true) {
                            for ($i = 0; $i < count($arr) - 1; $i++) {
                                for ($j = $i + 1; $j < count($arr); $j++) {
                                    if (($asc && $arr[$i] > $arr[$j]) || (!$asc && $arr[$i] < $arr[$j])) {
                                        $temp = $arr[$i];
                                        $arr[$i] = $arr[$j];
                                        $arr[$j] = $temp;
                                    }
                                }
                            }
                        }

                        // Sort ascending
                        echo"<div class = Right-lay>";
                                echo"<div class = andada-pro-page6_type>";
                                  echo "<h1>SELECTION STATEMENT</h1>";
                                 echo"</div>";
                        echo"</div>";

                        echo"<div class =Right-lay>";
                            echo"<div class = andada-pro-page6_type>";
                                sortStrings($strings, true);
                                echo "<h2><strong>Strings in Ascending Order:<br></strong></h2>" ;
                            echo"</div>";
                                echo "<p>" . implode(", ", $strings) ."</p>";
                        echo"</div>";

                        echo"<div class =Right-lay>";
                                // Sort#  descending
                                echo"<div class = andada-pro-page6_type>";
                                    sortStrings($strings, false);
                                    echo "<h2><strong>Strings in Descending Order:<br></strong></h2> ";
                                echo"</div>";
                                    echo "<p>" . implode(", ", $strings) . "</p>";
                        echo"</div>";

                        echo"<div class =Right-lay>";
                        echo"<div class = andada-pro-page6_type>";
                                echo"<h2><strong>Numbers:<br></strong></h2>";
                        echo"</div>";
                                echo"<p>".implode(",", $numbers)."</p>";
                        echo"</div>";

                        if ($numbers[0] % $numbers[4] == 0) {
                        $sum = array_sum($numbers);
                        $product = array_product($numbers);
                        $average = $sum / count($numbers);

                        echo"<div class =Right-lay>";
                            echo"<div class = andada-pro-page6_type>";
                                echo "<h2><strong>Sum:</strong></h2>"; echo"<p> $sum</p>";
                                echo "<h2><strong>Product:</strong></h2>"; echo"<p> $product</p>";
                                echo "<h2><strong>Average:</strong></h2>"; echo"<p> $average</p>";
                            echo"</div>";
                        echo"</div>";

                        } else {
                            // Sort# ascending order
                            for ($i = 0; $i < count($numbers) - 1; $i++) {
                                for ($j = $i + 1; $j < count($numbers); $j++) {
                                    if ($numbers[$i] > $numbers[$j]) {
                                        $temp = $numbers[$i];
                                        $numbers[$i] = $numbers[$j];
                                        $numbers[$j] = $temp;
                                    }
                                }
                            }
                            echo "<p><strong>Numbers in Ascending Order:</strong> " . implode(", ", $numbers) . "</p>";
                        }
                    echo"</div>"; //end of container-mid
                ?>
            
        </div> <!--End of Container-p6 -->
    </div> <!--End of Con-p6 -->
            <footer class="footer">
                    <div class="footer-content">
                        <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
                    </div>
            </footer>
    </body>
</html>