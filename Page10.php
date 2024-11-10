<!DOCTYPE html>
<html>
<head>
    <title>Two-dimensional Array</title>
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
.body7 {
    background-color: #020336;
    color: #333;
    line-height: 1.5;
    margin-top: -1%;
}
.section_0{
    background-image: url(image10.jpg);
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 700px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position-y: 50%;
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
    font-size: 35px;
}
.Title-box_type4 {
    background-color:#0203366d ;
    color: #f5ebe0;
    width: 100%;
    height: 600;
    padding: 5% 0 5% 0;
    border-radius: none;
    margin: 10% 0 35% 0;
    text-align: center;
}
.andada-pro-page6_type1 h2 {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 50px;
    color: #b3daf0;
  }
  .andada-pro-page6_type1 h1 {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 70px;
    color: #b3daf0;
  }
  .table_type3{
    border: 15px solid #95b1f0;
    width: 1200px;
    margin: 3% 5% 3% 17%;
    text-align: center;
    height: 400px;
    font-size: 50px;
}
.section_1{
    background-color: #023e8a; color: #caf0f8;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 680px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
   
}
.section_2{
    background-color: #0077b6;
    color: #caf0f8;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 1400px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
   
}

.section_4{
    background-color: #8ecae6; color: #14383f;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 500px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
.table_type5{
    border: 10px solid #031337;
    width: 1200px;
    margin: 3% 5% 3% 17%;
    text-align: center;
    height: 50px;
    font-size: 20px;
}
.table_type5 th{
    border: 1px solid #a5dbea;
    height: 10%;
    padding: 2%;
    color: #020336;
    background-color: #caf0f8;
}
.table_type5 tr{
    border: 2px solid #a5dbea; color: #10242b;
    padding: 2%;
    margin-left: 5%;
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
  
.fa {
    padding: 15px; 
    font-size: 30px;
    width: 60px; 
    height: 60px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }
  

</style>

<body class="body7">
    <header>
        <a href="index2.php">
        <button class="btn"><i class="fa fa-home"></i> HOME </button>
        </a>
    </header>

            <div class="section_0">
                    <div class="andada-pro-type1">
                        <div class="Title-box_type4">
                            <h1>Two-dimensional Array</h1>
                        </div>
                    </div>
            </div>
        <?php
                    // Function to create an NxN table

            echo"<div class = andada-pro-page6_type1>";
                    function createArray($n) {
                        $array = [];
                        for ($i = 0; $i < $n; $i++) {
                            for ($j = 0; $j < $n; $j++) {
                                $array[$i][$j] = rand(1, 100); 
                            }
                        }
                        return $array;
                    }

                    // section 2
                    function displayArray($array) {
                        echo "<table border='1' class= table_type3>";
                        foreach ($array as $row) {
                            echo "<tr>";
                            foreach ($row as $cell) {
                                echo "<td>$cell</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    // Funct. to Calculate the sum and Average R & col
                    function calculateRowColumnSumsAverages($array) {
                        $n = count($array);
                        $rowSums = $rowAverages = $colSums = $colAverages = array_fill(0, $n, 0);
                                    
                            for ($i = 0; $i < $n; $i++) {
                                for ($j = 0; $j < $n; $j++) {
                                    $rowSums[$i] += $array[$i][$j];
                                    $colSums[$j] += $array[$i][$j];
                                }
                                $rowAverages[$i] = $rowSums[$i] / $n;
                                $colAverages[$i] = $colSums[$i] / $n;
                            }
                        
                            return [$rowSums, $rowAverages, $colSums, $colAverages];
                        }
                    
                    // Function to calculate  sum & Ave of the diagonals
                    function calculateDiagonalSumsAverages($array) {
                        $n = count($array);
                        $primaryDiagonalSum = $secondaryDiagonalSum = 0;
                                    
                        for ($i = 0; $i < $n; $i++) {
                            $primaryDiagonalSum += $array[$i][$i];
                            $secondaryDiagonalSum += $array[$i][$n - $i - 1];
                        }

                        $primaryDiagonalAverage = $primaryDiagonalSum / $n;
                        $secondaryDiagonalAverage = $secondaryDiagonalSum / $n;

                        return [$primaryDiagonalSum, $primaryDiagonalAverage, $secondaryDiagonalSum, $secondaryDiagonalAverage];
                    }
                    
                    

                    // Function to find smallest and largest 3 in R and Col
                    function findMinMaxInRowsColumns($array) {
                        $n = count($array);
                        $rowMinMax = $colMinMax = [];

                        for ($i = 0; $i < $n; $i++) {
                            $rowMinMax[$i] = ['min' => min($array[$i]), 'max' => max($array[$i])];
                            $col = array_column($array, $i);
                            $colMinMax[$i] = ['min' => min($col), 'max' => max($col)];
                        }

                        return [$rowMinMax, $colMinMax];
                    }

                    function calculateOverallStats($array) {
                        $allNumbers = array_merge(...$array);
                        $overallSum = array_sum($allNumbers);
                        $overallAverage = $overallSum / count($allNumbers);
                        $overallMin = min($allNumbers);
                        $overallMax = max($allNumbers);

                        return [$overallSum, $overallAverage, $overallMin, $overallMax];
                    }

                    $n = 5; 
                    $array = createArray($n);


                    
                    //SECTION 2 
                    echo"<div class = section_1>";
                        echo "<h2>Generated NxN Array</h2>";
                        displayArray($array);
                    echo"</div>";

                    list($rowSums, $rowAverages, $colSums, $colAverages) = calculateRowColumnSumsAverages($array);
                    list($primaryDiagonalSum, $primaryDiagonalAverage, $secondaryDiagonalSum, $secondaryDiagonalAverage) = calculateDiagonalSumsAverages($array);
                    list($rowMinMax, $colMinMax) = findMinMaxInRowsColumns($array);
                    list($overallSum, $overallAverage, $overallMin, $overallMax) = calculateOverallStats($array);

                    echo "<div class='section_2'>";
                    echo "<h1><center>The Average and Sum of each row and column</center></h1>\n";
                    echo "<table border='1' class = table_type5>";
                        echo "<tr><th>Row/Column</th><th>Sum</th><th>Average</th></tr>";
                        for ($i = 0; $i < $n; $i++) {
                            echo "<tr><td>Row $i</td><td>{$rowSums[$i]}</td><td>{$rowAverages[$i]}</td></tr>";
                            echo "<tr><td>Column $i</td><td>{$colSums[$i]}</td><td>{$colAverages[$i]}</td></tr>";
                        }
                        echo "</table>";

                        echo "<h1><center>Row and Column Min and Max</center></h1>";
                        echo "<table border='1' class = table_type5>";
                        echo "<tr><th>Row/Column</th><th>Min</th><th>Max</th></tr>";
                        for ($i = 0; $i < $n; $i++) {
                            echo "<tr><td>Row $i</td><td>{$rowMinMax[$i]['min']}</td><td>{$rowMinMax[$i]['max']}</td></tr>";
                            echo "<tr><td>Column $i</td><td>{$colMinMax[$i]['min']}</td><td>{$colMinMax[$i]['max']}</td></tr>";
                        }
                        echo "</table>";
                    echo "</div>";

        echo"</div>";

                    echo"<div class = section_4>";
                     echo"<div class = andada-pro-page6_type0>";
                            echo "<h2>Diagonal Sums and Averages</h2>";
                                echo "<p>Primary Diagonal:Sum = $primaryDiagonalSum, Average = $primaryDiagonalAverage<br></p>";
                                echo "<p>Secondary Diagonal: Sum = $secondaryDiagonalSum, Average = $secondaryDiagonalAverage<br></p>";

                                echo "<h2>Overall Statistics</h2>";
                                    echo "<p>Overall Sum: $overallSum<br></p>";
                                    echo "<p>Overall Average: $overallAverage<br></p>";
                                    echo "<p>Overall Min: $overallMin<br></p>";
                                    echo "<p>Overall Max: $overallMax<br></p>";
                            echo"</div>";
                    echo"</div>";
        ?>


    </div>
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
