<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kathleah's CV</title>
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
.left-column{
    margin: 12% 0 3% 11%;
    width: 50%;
    background-color: #CDD6D0;
    padding: 5% ;
    border-radius: 10px;
    box-shadow: 10PX 10px 90px rgba(0, 0, 0, 0.627);
}
.Rectangle {
    background-color: #a9d6e5;
    color: #4a5759;
    width: 100%;
    height: 50px;
    padding: 10%;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 10px;
    display: flex;
    justify-content: space-between; 
    align-items: center; 
}

a { /*ICON*/
    display: inline-block;
    margin: 0 10px; /
}

.right-column{
    margin: 12% 10% 3% 0 ;
    width: 70%;
    background-color:#B2BEB5;
    padding: 110px 10px 10px 80px ;
    border-radius: 10px;
}
.right-column h2, .right-column p, .right-column ul {
    color: #0d1821; 
}
.container {
    display: flex;
    justify-content: space-between;
    margin: 10px auto;
}
.OuterRight-column{
    width: 40%;
    background-color:#f1f0ea; 
    padding: 5% ;
    border-radius: 10px;
}
.left-column {
    border-left: 5px ;
}

.profile {
    text-align: center;
}

.profile img {
    border-radius: 50%;
    width: 200px;
    height: 200px;
    object-fit: cover;
}

h1 {
    font-size: 24px;
    margin-top: 10px;
}

.objective {
    font-style: italic;
    margin: 15px 0;
}

.content{
    font-size: 25px;
    font-style: italic;
    margin-bottom: 10px;
    color: #012a4a;
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("SHS_Gradpic.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center; 
    opacity: 0.6;
    z-index: 1; 
}

h2 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #012a4a;
    font-family: Arial, Helvetica, sans-serif;
}

.contact, .languages, .skills, .personal-details, .education, .certificates {
    margin-bottom: 20px;
}

ul {
    list-style-type: none;
}

.skills ul {
    margin-left: 20px;
}
.certificates ul {
    padding-left: 20px;
}

.certificates ul li {
    margin-bottom: 5px;
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
  
.fa:hover {
    opacity: 0.7;
    color: #0d1821;
}
.fa-facebook {
    background: #3B5998;
    color: white;
  }
  .fa-google {
    background: #ede7b1;
    color: white;
  }
  .fa-linkedin {
    background: #007bb5;
    color: white;
  }
  .fa-instagram {
    background: #edadc7;
    color: white;
  }
</style>

<body>
    <header>
            <a href="index2.PHP">
               <button class="btn"><i class="fa fa-home"></i> HOME </button>
            </a>
    </header>

    <div class="container">

                    <div class="left-column">
                        <div class="profile">
                            <img src="kath.jpg" alt="Kathleah's Picture">
                            <h1>KATHLEAH LENDIO TAMPUS</h1>
                            <p class="objective">To secure a position in a collaborative and professional environment where I can work alongside talented individuals and learn from their expertise...</p>
                        </div>
                        <div class = "Rectangle">   
                            <a href="https://accounts.google.com/SignOutOptions?hl=en&continue=https://mail.google.com/mail&service=mail&ec=GBRAFw" class="fa fa-google"></a>
                            <a href="https://www.linkedin.com/in/kathleah-tampus-458592288/" class="fa fa-linkedin"></a>
                            <a href="https://www.instagram.com/kitkathki_t_oa/" class="fa fa-instagram"></a>
                            <a href="https://www.facebook.com/kat.catskid" class="fa fa-facebook"></a>
                        </div>

                        <div class="contact">
                            <h2>Contact</h2>
                            <p><strong>Phone:</strong> +63 956 973 9167</p>
                            <p><strong>Email:</strong> kathleaht17@gmail.com</p>
                            <p><strong>Location:</strong> Poblacion, Cordova, Cebu</p>
                        </div>
                        <div class="languages">
                            <h2>Languages</h2>
                            <p><li>Filipino</li></p>
                            <p><li>English</li></p>
                        </div>
                        <div class="skills">
                            <h2>Skills</h2>
                            <ul>
                                <li>Organized</li>
                                <li>Communication</li>
                                <li>Teamwork</li>
                                <li>Illustrator/Graphic</li>
                                <li>Web Design</li>
                                <li>Animation</li>
                                <br>
                            </ul>
                            <h3>Programming/Design Skills</h3>
                            <p>Java, CSS, HTML,</p>
                        </div>
                        
                        </div> <!--End of left container -->


                        <div class="right-column">
                        <div class="personal-details">
                            <h2>Personal Details</h2>
                            <p><strong>Birthdate:</strong> October 17, 2003</p>
                            <p><strong>Age:</strong> 21</p>
                            <p><strong>Height:</strong> 5'4"</p>
                            <p><strong>Weight:</strong> 54kg</p>
                            <p><strong>Gender:</strong>Female</p>
                            <p><strong>Religion:</strong> Roman Catholic</p>
                            <p><strong>Nationality:</strong> Filipino</p>
                            <p><strong>Marital Status:</strong> Single</p>
                            
                        </div>
                        <div class="education">
                            <h2>Education</h2>
                            <p><strong>Cebu Technological University</strong><br>3nd Year College, 2024-2025<br>Bachelor of Science in Information Systems</p>
                            <p><strong>Cordova National HighSchool</strong><br>Senior HighSchool, 2020-2022<br>Technical-Vocational-Livelihood Track</p>
                            <p><strong>Cordova National HighSchool</strong><br>Junior HighSchool, 2016-2020<br>With Honors</p>
                            <p><strong>Cordova Central School</strong><br>Elementary, 2010-2016</p>
                        </div>
                        <div class="certificates">
                            <h2>Certificates</h2>
                            <ul>
                                <li>Business Process Management (2024)</li>
                                <li>Database Normalization (2024)</li>
                                <li>Data Management System (2024)</li>
                                <li>ILEAP Course on Intellectual Property (2024)</li>
                                <li>Integrating Climate Change in UNICEF's Planning and Programming (2024)</li>
                            </ul>
                        </div>
                    </div> <!--end of Right container -->

               
            
        </div>
            <footer class="footer">
            <div class="footer-content">
                <p>&copy; 2024 Kathleah's Project I. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
