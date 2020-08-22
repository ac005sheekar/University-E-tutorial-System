<?php
 include 'header.php';
 ?>
<br>
<br><br>


<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
header
{
    background-color:#6666ff ;
	border-radius:0px;
}

a{
	color: white;

}

.saidur{
	color: white;

}
body{
	background-image: url("back10.jpg");
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
 
  
<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn"><b>Computer Science</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
	  <a href="cseprog.php">Structured Programming language </a>
	  <a href="cseos.php">Operating Systems</a>
	  <a href="csegra.php">Computer Graphics</a>
	  <a href="csedata.php">Data Structures and Algorithms</a>
	  <a href="csetoc.php">Theory of Computations</a>
	  <a href="csecomp.php">Compiler Design</a>
	  <a href="csemp.php">Micro processors</a>
	  <a href="csesoft.php">Software Engineering</a>
	  
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Electrical Engineering</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="eeeca1.php">Circuit Analysis 1</a>
	  <a href="eeeca2.php">Circuit Analysis 2</a>
	  <a href="eeeec.php">Energy Conversion</a>
	  <a href="eeeelec.php">Electromagnetics</a>
	  <a href="eeeconsig.php">Continuous Signals</a>
	  <a href="eeenum.php">Numerical Techniques</a>
	  <a href="eeedigsig.php">Digital Signals</a>
	  <a href="eeedigelec.php">Digital Electronics</a>
	  <a href="eeecomm.php">Communication Systems</a>
	  <a href="eeeconsys.php">Control Systems</a>
	  <a href="eeemp.php">Micro processors and Embedded Systems</a>
	  
	  
    </div>
  </div> 
  
  
  <div class="dropdown">
    <button class="dropbtn"><b>Civil Engineering</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ceana.php">Analytic Mechanics</a>
	  <a href="cesur.php">Surveying</a>
	  <a href="cegeo.php">Geology and Geomorphology</a>
	  <a href="cefluid.php">Fluid Mechanics</a>
	  <a href="cestuct.php">Structural Analysis</a>
	  <a href="ceenviron.php">Environmental Engineering</a>
	  <a href="cesoil.php">Soil Mechanics</a>
	  <a href="cetraffic.php">Transportation Engineering: Traffic Engineering</a>
	  <a href="cepave.php">Transportation Engineering: Pavement Design</a>
	  <a href="cerail.php">Transportation Engineering: Railway Engineering</a>
	  
	  
	  
    </div>
  </div>

  
  
  
  
  
     
	
  
</header>

<h2>Welcome to Civil Engineering</h2><br><br>
<h3>Pavement Design</h3><br><br>

<?php
 include 'slidece.php';
 ?>
 
 
 
<body class="saidur">

	Pavement engineering is a branch of civil engineering that uses engineering techniques to design and maintain flexible (asphalt) and rigid (concrete) pavements. This includes streets and highways and involves knowledge of soils, hydraulics, and material properties. Pavement engineering involves new construction as well as rehabilitation and maintenance of existing pavements. Maintenance often involves using engineering judgment to make maintenance repairs with the highest long-term benefit and lowest cost. The Pavement Condition Index (PCI) is an example of an engineering approach applied to existing pavements. Another example is the use of a falling weight deflectometer (FWD) to non-destructively test existing pavements. Calculation of pavement layer strengths can be performed from the resulting deflection data. The two methods - empirical or mechanistic is used to determine pavement layer thicknesses.
	
	Pavement engineering is part of GHD's core business of providing transportation infrastructure. Our connected global network of pavement engineering professionals undertakes investigation, analysis design and documentation services for the construction, rehabilitation and strengthening of pavements. Our services cover pavements for airfields, local roads, major freeways, highways, mine access, heavy industrial and haul roads, including the sourcing, selection and specification of materials. Our teams provide specialist whole-of-life analysis options to optimise the life of the pavement and minimise the overall cost of the maintenance during the operational life of the asset.

GHD understands the imperatives of our road clients and we are focused on delivering a fully comprehensive service in a timely manner while meeting safety, quality, performance and financial requirements.

One of GHD's key strengths is our innovative approach to sustainable pavement design. This has been achieved by our close connections with research centres across the globe. Our teams regularly attend and contribute to international study tours and conferences to stay abreast of latest technologies.






</body>
 <br><br><br>

 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<br><br><br><br>
 
<?php
 include 'footer.php';
 ?>
