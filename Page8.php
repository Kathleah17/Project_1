<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User-defined Functions</title>
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
    font-size:25px;
}
.andada-pro-page6_type p {
    font-family: "Andada Pro", serif;
    font-weight: 800;
    font-style:normal;
    font-size: 20px;
  }
  .andada-pro-page6_type h2 {
  font-family: "Andada Pro", serif;
  font-weight: 800;
  font-style:normal;
  font-size: 20px;
}
.Title-box {
    color: #f5ebe0;
    width: 100%;
    height: 50px;
    padding: 10%;
    border-radius: none;
    background-color: #c2c5aa72;
    margin: 6% 0 10% 0;
    text-align: center;
}
section{
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 600px;
    background-image: url("image-8.jpg");
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center;
}
.grid-section {
    display: grid;
    margin: 5% 2% 5% 0;
    background-color:none;
    padding: 60px;
    border-radius: 10px;
    height: 980px;
    box-shadow: 10px 10px 90px rgba(0, 0, 0, 0.627);
    grid-template-columns: 1fr 1fr; 
    grid-template-rows: 1fr 1fr; 
}

.grid-item {
    background-color: #4a5759;
    color: white;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    font-size: 1.2em;
    padding: 10px;
    margin: 5px ; 
    border-radius: 5px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: 400;
    font-size: 20px;
}
.section3{
    background-color: #cad2c5;
    color: #333;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 1190px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    /*display: flex;*/
}
.grid-item_type1{
    background-color: #fed9b7;
    color: #4a5759;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    font-size: 1.2em;
    padding: 10px;
    margin: 5px ; 
    border-radius: 5px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: 400;
    font-size: 20px;
}
.grid-item_type3{
    background-color: #8fc0a9;
    color: #4a5759;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    font-size: 1.2em;
    padding: 10px;
    margin: 5px ; 
    border-radius: 5px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: 400;
    font-size: 20px;
}
.grid-item_type2{
    background-color: #52796f;
    color: #faf3dd;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    font-size: 1.2em;
    padding: 10px;
    margin: 5px ; 
    border-radius: 5px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: 400;
    font-size: 20px;
}
.sec2{
    background-color: #f5ebe0;
    color: #333;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 1100px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;

}
.body2 {
    background-color: #333d29;
    color: #333;
    line-height: 1.5;
    margin-top: -1%;
}
</style>

<body div class="body2">
    <header>
                <a href="index2.php">
                <button class="btn"><i class="fa fa-home"></i> HOME </button>
                </a>
    </header>
    <div class = "andada-pro-type1">
    
    <?php
    function add($a, $b) {
        return $a + $b;
    }

    function subtract($a, $b) {
        return $a - $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }

    function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Division by zero error!";
        }
    }
    function modulus($a, $b) {
        return $a % $b;
    }

    function power($a, $b) {
        return pow($a, $b);
    }

    function squareRoot($a) {
        return sqrt($a);
    }

    function absolute($a) {
        return abs($a);
    }

    function maxNumber($a, $b) {
        return max($a, $b);
    }

    function minNumber($a, $b) {
        return min($a, $b);
    }

                    // Display the sec.
                echo "<section>";
                    echo"<div class = Title-box>";
                        echo "<h1>Ten User-Defined Functions</h1>";
                    echo"</div>";
                echo "</section>";

                echo "<div class = sec2>";
                    echo"<div class = grid-section";

                        $num1= 56;
                        $num2= 31;

                        echo"<div class = grid-item>";
                            echo"    <div class = andada-pro-type3>";

                                echo"<div class= grid-item>";
                                    echo"<h3>Addition</h3>";
                                    echo "<p>The addition of $num1 and $num2 is: " . add($num1, $num2) . "</p>";
                                echo"</div>";

                                echo"<div class= grid-item>";
                                    echo "<h3>Subtraction</h3>";
                                    echo "<p>The subtraction of $num1 and $num2 is: " . subtract($num1, $num2) . "</p>";
                                echo"</div>";
                            
                                echo"<div class= grid-item>";
                                        echo "<h3>Multiplication</h3>";
                                        echo "<p>The multiplication of $num1 and $num2 is: " . multiply($num1, $num2) . "</p>";
                                echo"</div>";

                                echo"<div class= grid-item>";
                                        echo "<h3>Division</h3>";
                                        echo "<p>The division of $num1 by $num2 is: " . divide($num1, $num2) . "</p>";
                                echo"</div>";

                                echo"<div class= grid-item>";
                                        echo "<h3>Modulus</h3>";
                                        echo "<p>The modulus of $num1 and $num2 is: " . modulus($num1, $num2) . "</p>";
                                echo"</div>";

                                echo"<div class= grid-item>";
                                        echo "<h3>Power</h3>";
                                        echo "<p>$num1 raised to the power of $num2 is: " . power($num1, $num2) . "</p>";
                                echo"</div>";

                                echo"<div class= grid-item>";
                                        echo "<h3>Square Root</h3>";
                                        echo "<p>The square root of $num1 is: " . squareRoot($num1) . "</p>";
                                echo"</div>";

                                echo"<div class= grid-item>";
                                        echo "<h3>Absolute</h3>";
                                        echo "<p>The absolute value of -$num1 is: " . absolute(-$num1) . "</p>";
                                echo"</div>";

                                echo"<div class= grid-item>";
                                    echo "<h3>Maximum</h3>";
                                        echo "<p>The maximum of $num1 and $num2 is: " . maxNumber($num1, $num2) . "</p>";
                                echo"</div>";

                                echo"<div class= grid-item>";
                                        echo "<h3>Minimum</h3>";
                                        echo "<p>The minimum of $num1 and $num2 is: " . minNumber($num1, $num2) . "</p>";
                                echo"</div>";
                            echo"</div>";
                        echo "</div>";
                     echo "</div>";
                echo "</div>";

            echo"<div class = section3>";
                    
                    
                    function calculateAverage($scores) {
                        $total = array_sum($scores);
                        return $total / count($scores);
                    }
                    
                    function calculateGrade($quizAvg, $projectAvg, $examScore) {
                        return ($quizAvg * 0.3) + ($projectAvg * 0.2) + ($examScore * 0.5);
                    }
                    
                    function displayGrades($students) {
                        foreach ($students as $student) {
                            echo "Name: " . $student['name'] . " - Grade: " . $student['grade'] . "<br>";
                        }
                    }
                    echo"<div class=andada-pro-page6_type>";
                    echo"<h1>Example of Addition, Multiplication, & Division functions:</h1>";
                    echo"</div>";
                    $quizzes = [85, 90, 78];
                    $projects = [88, 92];
                    $exams = [44, 51, 89, 39];
                    
                    // Calculate averages
                    $quizAvg = calculateAverage($quizzes);
                    $projectAvg = calculateAverage($projects);
                    $examAvg = calculateAverage($exams);
                    
                    // Calculate final grade
                    $finalGrade = calculateGrade($quizAvg, $projectAvg, $examAvg);
                    
                    //solution
                    
                    // Display grades
                    $students = [
                        ['name' => 'John Doe', 'grade' => $finalGrade]
                    ];
                echo "<div class='grid-item_type1'>";
                    displayGrades($students);
                echo "</div>";

                echo "<div class='grid-item_type2'>";
                    echo "<h3>Quiz Scores</h3>";
                    echo "<p>" . implode(", ", $quizzes) . "</p>";
                echo "</div>";

                echo "<div class='grid-item_type2'>";
                    echo "<h3>Project Score</h3>";
                    echo "<p>" . implode(", ", $projects) . "</p>";
                echo "</div>";

                echo "<div class='grid-item_type2'>";
                    echo "<h3>Exam Scores</h3>";
                    echo "<p>" . implode(", ", $exams) . "</p>";
                echo "</div>";

                echo "<div class='grid-item_type3'>";
                    echo "<h3>Quiz Average</h3>";
                    echo "<p>" . $quizAvg . "</p>";
                    echo "<p><strong>Explanation:</strong> The average quiz score is calculated as the sum of the quiz scores divided by the number of quizzes:<br> (" . implode(" + ", $quizzes) . ") / " . count($quizzes) . " = " . $quizAvg . ".</p>";
                echo "</div>";

                echo "<div class='grid-item_type3'>";
                    echo "<h3>Project Average</h3>";
                    echo "<p>" . $projectAvg . "</p>";
                    echo "<p><strong>Explanation:</strong> The average project score is calculated as the sum of the project scores divided by the number of projects:<br> (" . implode(" + ", $projects) . ") / " . count($projects) . " = " . $projectAvg . ".</p>";
                echo "</div>";
                echo "<div class='grid-item_type3'>";
                    echo "<h3>Exam Average</h3>";
                    echo "<p>" . $examAvg . "</p>";
                    echo "<p><strong>Explanation:</strong> The average exam score is calculated as the sum of the exam scores divided by the number of exams: (" . implode(" + ", $exams) . ") / " . count($exams) . " = " . $examAvg . ".</p>";
                echo "</div>";  

                echo "<div class='grid-item'>";
                    echo "<h3>Final Average</h3>";
                    echo "<p>" . $finalGrade . "</p>";
                    echo "<p><strong>Explanation:</strong> The final grade is calculated using the weighted averages of the quiz average, project average, and exam score:<br>(Quiz Average * 0.3) + (Project Average * 0.2) + (Exam Score * 0.5) = (" . $quizAvg . " * 0.3) + (" . $projectAvg . " * 0.2) + (" . $examAvg . " * 0.5) = " . $finalGrade . ".</p>";
                echo "</div>";
            echo"</div>";
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
