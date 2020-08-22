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
<h3>Fluid Mechanics</h3><br><br>

<?php
 include 'slidece.php';
 ?>
 
 
 
<body class="saidur">

		

Fluid mechanics is the branch of physics concerned with the mechanics of fluids (liquids, gases, and plasmas) and the forces on them. It has applications in a wide range of disciplines, including mechanical, civil, chemical and biomedical engineering, geophysics, astrophysics, and biology. It can be divided into fluid statics, the study of fluids at rest; and fluid dynamics, the study of the effect of forces on fluid motion. It is a branch of continuum mechanics, a subject which models matter without using the information that it is made out of atoms; that is, it models matter from a macroscopic viewpoint rather than from microscopic. Fluid mechanics, especially fluid dynamics, is an active field of research, typically mathematically complex. Many problems are partly or wholly unsolved, and are best addressed by numerical methods, typically using computers. A modern discipline, called computational fluid dynamics (CFD), is devoted to this approach. Particle image velocimetry, an experimental method for visualizing and analyzing fluid flow, also takes advantage of the highly visual nature of fluid flow.<br><br><br>

The study of fluid mechanics goes back at least to the days of ancient Greece, when Archimedes investigated fluid statics and buoyancy and formulated his famous law known now as the Archimedes' principle, which was published in his work On Floating Bodies—generally considered to be the first major work on fluid mechanics. Rapid advancement in fluid mechanics began with Leonardo da Vinci (observations and experiments), Evangelista Torricelli (invented the barometer), Isaac Newton (investigated viscosity) and Blaise Pascal (researched hydrostatics, formulated Pascal's law), and was continued by Daniel Bernoulli with the introduction of mathematical fluid dynamics in Hydrodynamica (1739).<br><br><br>

Inviscid flow was further analyzed by various mathematicians Jean le Rond d'Alembert, Joseph Louis Lagrange, Pierre-Simon Laplace, Siméon Denis Poisson) and viscous flow was explored by a multitude of engineers including Jean Léonard Marie Poiseuille and Gotthilf Hagen. Further mathematical justification was provided by Claude-Louis Navier and George Gabriel Stokes in the Navier–Stokes equations, and boundary layers were investigated (Ludwig Prandtl, Theodore von Kármán), while various scientists such as Osborne Reynolds, Andrey Kolmogorov, and Geoffrey Ingram Taylor advanced the understanding of fluid viscosity and turbulence.<br><br><br>
<br><br><br>
Main branches<br><br><br>
Fluid statics<br><br><br>
Main article: Fluid statics<br><br><br>
Fluid statics or hydrostatics is the branch of fluid mechanics that studies fluids at rest. It embraces the study of the conditions under which fluids are at rest in stable equilibrium; and is contrasted with fluid dynamics, the study of fluids in motion. Hydrostatics offers physical explanations for many phenomena of everyday life, such as why atmospheric pressure changes with altitude, why wood and oil float on water, and why the surface of water is always level and horizontal whatever the shape of its container. Hydrostatics is fundamental to hydraulics, the engineering of equipment for storing, transporting and using fluids. It is also relevant to some aspect of geophysics and astrophysics (for example, in understanding plate tectonics and anomalies in the Earth's gravitational field), to meteorology, to medicine (in the context of blood pressure), and many other fields.<br><br><br>
<br><br><br>
Fluid dynamics<br><br><br>
Main article: Fluid dynamics<br><br><br>
Fluid dynamics is a subdiscipline of fluid mechanics that deals with fluid flow—the science of liquids and gases in motion. Fluid dynamics offers a systematic structure—which underlies these practical disciplines—that embraces empirical and semi-empirical laws derived from flow measurement and used to solve practical problems. The solution to a fluid dynamics problem typically involves calculating various properties of the fluid, such as velocity, pressure, density, and temperature, as functions of space and time. It has several subdisciplines itself, including aerodynamics (the study of air and other gases in motion) and hydrodynamics (the study of liquids in motion). Fluid dynamics has a wide range of applications, including calculating forces and movements on aircraft, determining the mass flow rate of petroleum through pipelines, predicting evolving weather patterns, understanding nebulae in interstellar space and modeling explosions. Some fluid-dynamical principles are used in traffic engineering and crowd dynamics.<br><br><br>
	
<br><br><br><br><br><br>
Assumptions<br><br><br>

Balance for some integrated fluid quantity in a control volume enclosed by a control surface.<br><br><br>
The assumptions inherent to a fluid mechanical treatment of a physical system can be expressed in terms of mathematical equations. Fundamentally, every fluid mechanical system is assumed to obey:<br><br><br>
<br><br><br>
Conservation of mass<br><br><br>
Conservation of energy<br><br><br>
Conservation of momentum<br><br><br>
The continuum assumption<br><br><br>
For example, the assumption that mass is conserved means that for any fixed control volume (for example, a spherical volume)—enclosed by a control surface—the rate of change of the mass contained in that volume is equal to the rate at which mass is passing through the surface from outside to inside, minus the rate at which mass is passing from inside to outside. This can be expressed as an equation in integral form over the control volume.<br><br><br>

The continuum assumption is an idealization of continuum mechanics under which fluids can be treated as continuous, even though, on a microscopic scale, they are composed of molecules. Under the continuum assumption, macroscopic (observed/measurable) properties such as density, pressure, temperature, and bulk velocity are taken to be well-defined at "infinitesimal" volume elements—small in comparison to the characteristic length scale of the system, but large in comparison to molecular length scale. Fluid properties can vary continuously from one volume element to another and are average values of the molecular properties. The continuum hypothesis can lead to inaccurate results in applications like supersonic speed flows, or molecular flows on nano scale. Those problems for which the continuum hypothesis fails, can be solved using statistical mechanics. To determine whether or not the continuum hypothesis applies, the Knudsen number, defined as the ratio of the molecular mean free path to the characteristic length scale, is evaluated. Problems with Knudsen numbers below 0.1 can be evaluated using the continuum hypothesis, but molecular approach (statistical mechanics) can be applied for all ranges of Knudsen numbers.<br><br><br>

<br><br><br>


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
