<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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

    .container {
    display: flex;
    justify-content: space-between;
    margin: 10px auto;
}
.Container-center{
    display: flex;
    justify-content: center;
    margin: 12% 10% 2% 10%;
    background-color: #4f6d7a9a;
    background-image: url("im0.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center;
    border-radius: 10px;
    width: 90%;
}
.left-page{
    margin: 9px auto;
    width: 40%;
    padding: 5% ;
    border-radius: 10px;
    border: none;
}
.container-title{ /*index2*/
    font-size: 50px;
    margin: 60% auto; 
    font-weight: bolder;
    color: #4a5759;
    text-align: center;

}
.right-page{
    margin: 18px 30px 18px 0;
    width: 50%;
    background-color: #CDD6D0;
    padding: 3%  ;
    border-radius: 10px;
    box-shadow: 10PX 10px 90px rgba(0, 0, 0, 0.627);
}
.page-container{ /*Page0*/
    margin: 10% 50px 100px; 
    width: 50%; 
    background-color: #d6e5e3;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    flex-direction: column;
    display: flex;
    flex-direction: column;
    gap: 10px; 
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
.page-item:hover{    
    color: #CDD6D0;
    background-color: #16242C;
}


</style>

<body>
    <header>
            <a href="index2.php">
               <button class="btn"><i class="fa fa-home"></i> HOME </button>
            </a>
    </header>
    <div class="container"> <!-- Background layer 1-->
        <div class="Container-center"> <!-- Image container -->
            <div class="left-page">
                 <h2 class="container-title">TABLE OF CONTENTS</h2>
            </div>
                  <div class="right-page page-container">
                    <a href="Page1.php">
                        <div class="page-item">Page 1</div>
                    </a>
                    <a href="Page2.php">
                        <div class="page-item">Page 2</div>
                    </a>
                    <a href="Page3.php">
                        <div class="page-item">Page 3</div>
                    </a>
                    <a href="Page4.php">
                        <div class="page-item">Page 4</div>
                    </a>
                    <a href="Page5.php">
                        <div class="page-item">Page 5</div>
                    </a>
                  </div>
                  <div class="right-page page-container">
                    <a href="Page6.php">
                        <div class="page-item">Page 6</div>
                    </a>
                    <a href="Page7.php">
                        <div class="page-item">Page 7</div>
                    </a>
                    <a href="Page8.php">
                        <div class="page-item">Page 8</div>
                    </a>
                    <a href="Page9.php">
                        <div class="page-item">Page 9</div>
                    </a>
                    <a href="Page10.php">
                        <div class="page-item">Page 10</div>
                    </a>
                </div>
        </div>
    </div>
    </div>
    <footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
    </div>
    </footer>
</body>
</html>
