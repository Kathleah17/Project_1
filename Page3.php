<!DOCTYPE html>
<html>
    <head>
        <title>Manipulating Numbers</title>
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
.body6 {
    background-color: #fdc2b3;
    color: #333;
    line-height: 1.5;
    margin-top: -1%;
}
.sectionA{
    background-image: url("image-9.jpg");
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 600px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-repeat: no-repeat;
    background-size: cover; 
    background-position-y: 100%;
}
.sectionB{
    background-color: #eaa8a8;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 850px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    justify-content: center;
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
.table_type2{
    border: 10px dashed #bd5d80;
    width: 1000px;
    margin: 3% 10% 3% 23%;
    text-align: center;
    height: 100px;
}
.table_type2 th{
    background-color: #f4c2d1;
    border: 1px solid #333d29;
    height: 10%;
    padding: 2% auto;
    text-align: center;
}
.table_type2 tr{
    border: 2px solid #333;
    width: 5% auto;
}
.table_type2 td{
    font-size: 30px;
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
    font-size: 30px;
}
.andada-pro-type1 h3 {
    font-family: "Andada Pro", serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    font-size: 35px;
}
</style>
<body class = body6>
        <header>
            <a href="index2.php">
            <button class="btn"><i class="fa fa-home"></i> HOME </button>
            </a>
        </header>
        <div class="andada-pro-type1">

        <div class="sectionA"> 
            <div class="Title-box_type1">
               <h1>Manipulating Numbers</h1>
            </div>
        </div>
        <?php
                // Function to calculate the Ave.
                function calculateAverage($numbers) {
                    return array_sum($numbers) / count($numbers);
                }
                //data 
                $quizzes = [85, 75, 78, 92, 88]; 
                $projects = [90, 94]; 
                $midtermExam = 90; 
                $tentativeFinalExam = 88; 

                // Calculate Ave scores
                $averageQuizzes = calculateAverage($quizzes);
                $averageProjects = calculateAverage($projects);

                // Calculate grades
                $midtermGrade = ($averageQuizzes * 0.30) + ($averageProjects * 0.20) + ($midtermExam * 0.50);
                $tentativeFinalGrade = ($averageQuizzes * 0.30) + ($averageProjects * 0.20) + ($tentativeFinalExam * 0.50);
                $finalFinalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

                        echo "<div class='sectionB'>";

                            echo "<table class='table_type2' border='1'>";
                                echo "<tr><th><p>Quiz Scores</p></th><td>" . implode("</td><td>", $quizzes) . "</td></tr>";
                                echo "<tr><th><p>Project Scores</p></th><td>" . implode("</td><td>", $projects) . "</td></tr>";
                                echo "<tr><th><p>Midterm Score</p></th><td>$midtermExam</td></tr>";
                            echo "</table>";

                            echo "<h3>Midterm Grade:</h3><p> " . $midtermGrade . "<br></p>";
                            echo "<h3>Tentative Grade:</h3><p> " . $tentativeFinalGrade . "<br></p>";
                            echo "<h3>Final Grade: </h3><p>" . $finalFinalGrade . "<br></p>";
                        echo "</div>";     
            ?>
        </div>
        
        <footer class="footer">
            <div class="footer-content">
                <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
            </div>
        </footer>
</body>
</html>
