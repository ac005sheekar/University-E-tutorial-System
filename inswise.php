<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
header
{
    background-color:#6666ff ;
	border-radius:0px;
}
.saidur{
	color:white;
}
body{
	background-image: url("back7.jpg");
}

.navbar {
    overflow: hidden;
	border-radius:0px;
    background-color: #ff4d88 ;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 15px;
    color: white;
    text-align: center;
    padding: 10px 14px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
	
}

.dropdown .dropbtn {
    font-size: 13px;    
    border: none;
    outline: none;
    color:white;
    padding: 14px 18px;
    background-color: #ff4d88 ;
	width: 100%;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: OrangeRed  ;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: LightCoral ;
    min-width: 150px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #08f708;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<header>
<body style="text-align:center;color:White;"; </body>
  <h3><b>E-Tutorial System for <br>Uttara University</b></h3>
  
<div class="navbar">
  <a href="hhome.php"><b>Home</b></a>
  <div class="dropdown">
    <button class="dropbtn"><b>Tutorials</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="subject.php">Subject Wise</a>
	  <a href="inswise.php">Instructor Wise </a>
	  
	  
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Instructors</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="instructor.php">Instructors List</a>
	  
    </div>
  </div> 
  
  
  <div class="dropdown">
    <button class="dropbtn"><b>Feedback</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="feedtuto.php">Feedback for Tutorials</a>
	  <a href="feedtea.php">Feedback for Teachers</a>
	  
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn"><b>Contact Us</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="address.php">Address</a>
	  <a href="social.php">Social Media and TELECOM</a>
	  
	  
    </div>
  </div> 
  
  
  
  
     
	
  
</header>

<style>
.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   border-radius:30px;
   background-color: #6666ff  ;
   color: white;
   text-align: center;
}
</style>
</head>
<body>
<h4 class="saidur" >Instructor Wise Course List:</h4>

<h4><b>Computer Science</b></h4><br>
<b>1. MD. SHAFIUL ALAM CHOWDHURY---Associate Professor---
<a href="cseprog.php" class="btn btn-info" role="button"><b>Structured Programming language</b></a><br><br>
2. MST. NAJNIN SULTANA---Assistant Professor---
<a href="cseos.php" class="btn btn-info" role="button"><b>Operating System</b></a>---
<a href="csegra.php" class="btn btn-info" role="button"><b>Computer Graphics</b></a><br><br>
3. DR. MD. AKHTARUZZAMAN---Assistant Professor---
<a href="csedata.php" class="btn btn-info" role="button"><b>Data Structures and Algorithms</b></a><br><br>
4. TANZILLAH WAHID---Senior Lecturer---
<a href="csetoc.php" class="btn btn-info" role="button"><b>Theory of Computation</b></a>---
<a href="csecomp.php" class="btn btn-info" role="button"><b>Compiler Design</b></a><br><br>
5. MD. AMANAT ULLAH---Senior Lecturer---
<a href="csenet.php" class="btn btn-info" role="button"><b>Computer Networks</b></a>---
<a href="csesoft.php" class="btn btn-info" role="button"><b>Software Engineering</b></a><br><br>


<h4><b>Electrical Engineering</b></h4><br>
<b>1. DR. MOHAMMED SHAHRIAR SABUKTAGIN---Associate Professor---
<a href="eeeca1.php" class="btn btn-info" role="button"><b>Circuit Analysis 1</b></a>---
<a href="eeeca2.php" class="btn btn-info" role="button"><b>Circuit Analysis 2</b></a><br><br>
2. MD. DELWAR HOSSEN---Assistant Professor---
<a href="eeeec.php" class="btn btn-info" role="button"><b>Energy Conversion</b></a>---
<a href="eeeelec.php" class="btn btn-info" role="button"><b>Electromagnetics</b></a><br><br>
3. MD. REZAUL KARIM---Assistant Professor---
<a href="eeeconsig.php" class="btn btn-info" role="button"><b>Continuous signals</b></a>---
<a href="eeenum.php" class="btn btn-info" role="button"><b>Numerical techniques</b></a><br><br>
4. MD. JAHIRUL ISLAM---Senior Lecturer---
<a href="eeedigsig.php" class="btn btn-info" role="button"><b>Digital Signals</b></a>---
<a href="eeedigelec.php" class="btn btn-info" role="button"><b>Digital Electronics</b></a><br><br>

5. SAHAREEN NOOR---Senior Lecturer</b>---
<a href="eeecomm.php" class="btn btn-info" role="button"><b>Communication Systems</b></a>---
<a href="eeeconsys.php" class="btn btn-info" role="button"><b>Control systems</b></a>---
<a href="eeemp.php" class="btn btn-info" role="button"><b>Microprocessors and Embedded Systems</b></a>---
<br><br>

<h4><b>Civil Engineering</b></h4><br>
<b>1. AMIMUL AHSAN---Associate Professor---
<a href="ceana.php" class="btn btn-info" role="button"><b>Analytic Mechanics</b></a>---
<a href="cesur.php" class="btn btn-info" role="button"><b>Surveying</b></a><br><br>
2. MD. MONUAR HOSSAIN---Senior Lecturer---
<a href="cegeo.php" class="btn btn-info" role="button"><b>Geology and Geomorphology</b></a>---
<a href="cefluid.php" class="btn btn-info" role="button"><b>Fluid Mechanics</b></a><br><br>
3. MD. SELIM REZA---Senior Lecturer---
<a href="cestruct.php" class="btn btn-info" role="button"><b>Structural Analysis</b></a>---
<a href="ceenviron.php" class="btn btn-info" role="button"><b>Environmental Engineering</b></a><br><br>
4. MD. IMRUL KAYES---Senior Lecturer---
<a href="cesoil.php" class="btn btn-info" role="button"><b>Soil Mechanics</b></a>---
<a href="cetraffic.php" class="btn btn-info" role="button"><b>Traffic Engineering</b></a><br><br>
5. MST. IRFATWARA SULTANA---Senior Lecturer---
<a href="cepave.php" class="btn btn-info" role="button"><b>Pavement Design</b></a>---
<a href="cerail.php" class="btn btn-info" role="button"><b>Railway Engineering</b></a><br><br>
</b><br><br>

<br><br><br>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<br><br><br><br>

<div class="footer">
  <p><b>Copyright :<br>Team Iconic<br>System Analysis and Design<br>Section: Excellent     </b></p>
  
</div>
</body>
</html>
