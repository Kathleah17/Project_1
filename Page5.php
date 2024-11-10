<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>10 Constants</title>
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
.container {
    display: flex;
    justify-content: space-between;
    margin: 10px auto;
}
.Left-Con5 {
    margin: 5% 0 0 10%   ; 
    width: 70%;
    border-radius: 10px;
    border: none;
    background-image: url("image-5.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    background-position: center;
    height: 1100px;  
    text-align: center;
}
.Title-box_type3 {
    background-color:#5a4b4b5e;
    color: #11181a;
    width: 100%;
    height: 40%;
    padding: 15% ;
    border-radius: none;
    margin: 45% 0 30% 0;
    text-align: center;
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
.right_Conp5 {
    display: grid;
    margin: 5% 10% 5% 0;
    background-color:none;
    padding: 50px; 
    border-radius: 10px;
    height:1100px;
    box-shadow: 10px 10px 90px rgba(0, 0, 0, 0.627);
    grid-template-columns: 1fr 1fr; 
    grid-template-rows: 1fr 1fr; 
}
.page-item { /*page rectangle*/ /*Page0*/
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
</head>
<body>
    <header>
            <a href="index2.php">
               <button class="btn"><i class="fa fa-home"></i> HOME </button>
            </a>
    </header>
<div class="container">
    <div class="Container-p2">
    <?php
        echo"<div class = Left-Con5>";
                echo "<div class=Title-box_type3>";
                    echo"<div class=andada-pro-type1>";
                        echo"<h1><strong>The 10 Constant</strong></h1>";
                    echo"</div>";
                echo "</div>";
        echo"</div>";

         //constants
        define("PI", 3.14159);
        define("GRAVITY", 9.8);
        define("LIGHT_SPEED", 299792458);
        define("AVOGADRO", 6.022e23);
        define("BOLTZMANN", 1.380e-23);
        define("EULER", 2.71828);
        define("PLANCK", 6.626e-34);
        define("GAS_CONSTANT", 8.314);
        define("EARTH_RADIUS", 6371);
        define("SOLAR_MASS", 1.989e30);

$constants = [
    "PI" => ["description" => "Ratio of a circle's circumference to its diameter", 
             "example" => "Circumference of a circle (radius 5m): " . (2 * PI * 5) . " m"],

    "GRAVITY" => ["description" => "Gravitational acceleration on Earth (m/s²)", 
                  "example" => "Weight of a 10kg object: " . (10 * GRAVITY) . " N"],

    "LIGHT_SPEED" => ["description" => "Speed of light in a vacuum (m/s)", 
                      "example" => "Distance light travels in 1 second: " . LIGHT_SPEED . " m"],

    "AVOGADRO" => ["description" => "Number of atoms/molecules in a mole", 
                   "example" => "Molecules in 2 moles of a substance: " . (2 * AVOGADRO)],

    "BOLTZMANN" => ["description" => "Boltzmann constant (J/K)", 
                    "example" => "Energy at 300K: " . (300 * BOLTZMANN) . " J"],

    "EULER" => ["description" => "Euler's number, base of natural logarithm", 
                "example" => "e²: " . (EULER ** 2)],

    "PLANCK" => ["description" => "Planck constant (J·s)", 
                 "example" => "Energy of a photon with frequency 5e14 Hz: " . (PLANCK * 5e14) . " J"],

    "GAS_CONSTANT" => ["description" => "Ideal gas constant (J/(mol·K))", 
                       "example" => "Pressure of 1 mole gas at 273K in 1m³: " . ((1 * GAS_CONSTANT * 273) / 1) . " Pa"],

    "EARTH_RADIUS" => ["description" => "Average radius of Earth (km)", 
                       "example" => "Circumference of Earth: " . (2 * PI * EARTH_RADIUS) . " km"],

    "SOLAR_MASS" => ["description" => "Mass of the sun (kg)", 
                     "example" => "Gravitational force between Earth and Sun (distance 1.5e11m): " . 
                     (GRAVITY * SOLAR_MASS * 5.972e24 / (1.5e11 ** 2)) . " N"]
];

echo "<div class='right_Conp5'>";
foreach ($constants as $const => $details) {
    echo "<div class='page-item'>";
        echo "<p><strong>$const</strong> (" . constant($const) . "):<br> {$details['description']}</p>";
        echo "</div>";

        echo "<div class='page-item'>";
        echo "<p><em>Example:</em> {$details['example']}</p>";
    echo "</div>";
}
echo "</div>";


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

