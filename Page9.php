<!DOCTYPE html>
<html>
<head>
    <title>Single-dimensional Array</title>
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
.body4 {
    background-color: #ffe5ec;
    color: #333;
    line-height: 1.5;
    margin-top: -1%;
}
/*TEXT DESIGN CATEGORY*/

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
.andada-pro-type1 h3 {
    font-family: "Andada Pro", serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    font-size: 35px;
}
.andada-pro-type3 h3 {
    font-family: "Andada Pro", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
    font-size: 24px;
}
.section5{
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 900px;
    background-color: #ffcfd1;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    
}
.ConPage9 {
    display: flex;
    justify-content: center;
    margin: -2% 0 2% 5%;
    background-color: #ffcfd2; 
    border-radius: 10px;
    max-width: 90%;
    height: 850px;
    padding: 5% auto;
}
.LeftP9 {
    margin: 5% 0 0 5%    ; /* Top, Right, Bottom, Left margins */
    width: 800px;
    border-radius: 10px;
    border: none;
    background-image: url(image--9.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 700px;  
    text-align: center;
    color: #f5ebe0;
}
.Title-box_type2 {
    background-color:none ;
    color: #071012;
    width: 100%;
    height: 50px;
    padding: 15% ;
    border-radius: none;
    margin: 45% 0 30% 0;
    text-align: center;
}
.RightP9 {
    display: flex;
    margin: 5% 9% 0 0;
    background-color:#ffe5ec;
    padding: 2% auto; 
    border-radius: 10px;
    height:700px;
    width: 1200px;
    box-shadow: 10px 10px 90px rgba(0, 0, 0, 0.627);
}
.section6{
    background-color: #ffc2d2;
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 900px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px; 
}
.ConP9 {
    display: flex;
    justify-content: center;
    margin: -2% 0 2% 5%; 
    background-color: #ffc2d1; 
    border-radius: 10px;
    max-width: 90%;
    height: 850px;
    padding: 5% auto;
}
.Leftp9 {
    margin: 5% 0 0 5%;
    width: 800px;
    border-radius: 10px;
    border: none;
    background-image: url(image9.jpg);
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center;
    height: 700px;  
    text-align: center;
    color: #f5ebe0;
}
table{
    border: 1px solid #333d29;
    width: 900px;
    margin: 3% 5% 3% 5%;
    overflow-x:auto;
}
.section4{
    padding: 60px;
    margin: 10px auto;
    max-width: 98%;
    height: 600px;
    background-image: url("image-9.jpg");
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
</style>

<body  class="body4">
    <header>
        <a href="index2.php">
        <button class="btn"><i class="fa fa-home"></i> HOME </button>
        </a>
    </header>
<div class="andada-pro-type1">
<div class="section4"> 
    <div class="Title-box_type1">
        <h1>Single-dimensional Array</h1>
    </div>
</div>
<?php
    echo "<div class=section5>";
        $names = ["Marta", "Amanda", "Bentoy", "Adriana", "Zia", "Miyo", "Beky", "Catty", "Ada", "Gojo"];
        $ages = [25, 30, 25, 20, 19, 29, 19, 35, 48, 35];
        $sexes = ["F", "F", "M", "M", "F", "F", "F", "F", "F", "M"];
        $nationalities = ["Filipino", "American", "Filipino", "Romani", "Singaporeans", "Japanese", "Filipino", "Swedish", "Indian", "Japanese"];

        // Unsorted list
        echo "<div class=ConPage9>";
            echo "<div class=LeftP9>";
                echo "<div class=Title-box_type2>";
                    echo "<h2>Unsorted List</h2>";
                echo "</div>";
            echo "</div>";
            echo "<div class=RightP9>";
                echo "<table border='1'><tr><th><h3>Name</h3></th><th><h3>Age</h3></th><th><h3>Sex</h3></th><th><h3>Nationality</h3></th></tr>";
                for ($i = 0; $i < count($names); $i++) {
                    echo "<tr><td><p>{$names[$i]}</p></td><td><p>{$ages[$i]}</p></td><td><p>{$sexes[$i]}</p></td><td><p>{$nationalities[$i]}<p></td></tr>";
                }
                echo "</table>";
            echo "</div>";
        echo "</div>";
    echo "</div>";

    // Sort parallel arrays 
    function customSort(&$names, &$ages, &$sexes, &$nationalities) {
        $combined = [];
        for ($i = 0; $i < count($names); $i++) {
            $combined[] = [
                "name" => $names[$i],
                "age" => $ages[$i],
                "sex" => $sexes[$i],
                "nationality" => $nationalities[$i]
            ];
        }
        //not reverse just sort listed
        usort($combined, function($a, $b) {
            return strcmp($a["name"], $b["name"]);
        }); 
        
        // Reverse order code
        /*
        usort($combined, function($a, $b) {
            return strcmp($a["name"], $b["name"]);
        });
         */

        foreach ($combined as $index => $data) {
            $names[$index] = $data["name"];
            $ages[$index] = $data["age"];
            $sexes[$index] = $data["sex"];
            $nationalities[$index] = $data["nationality"];
        }
    }
    customSort($names, $ages, $sexes, $nationalities);

    echo "<div class=section6>";
        echo "<div class=ConP9>";
            echo "<div class=Leftp9>";
                echo "<div class=Title-box_type2>";
                    echo "<h2>Sorted List</h2>";
                echo "</div>";
            echo "</div>";
            echo "<div class=RightP9>";
                echo "<table border='1'><tr><th><h3>Name</h3></th><th><h3>Age</h3></th><th><h3>Sex</h3></th><th><h3>Nationality</h3></th></tr>";
                for ($i = 0; $i < count($names); $i++) {
                    echo "<tr><td><p>{$names[$i]}</p></td><td><p>{$ages[$i]}</p></td><td><p>{$sexes[$i]}</p></td><td><p>{$nationalities[$i]}<p></td></tr>";
                }
                echo "</table>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>
</div> <!--end of font type -->
<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
