<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login Page</title>
<style>

	
			.saidur{
				text-align:center;
				color: white;
				background-image: url("back6.jpg");
			
			}
			
			


	

header
{
    background-color:#6666ff ;
	border-radius:0px;
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
<body class ="saidur">
<header>
<body style="text-align:center;color:White;"; </body>
  <h3><b>E-Tutorial System for<br> Uttara University</b></h3>
  
<div class="navbar">
	<a href="hhome.php"><b>Home</b></a>
	
	<div class="dropdown">
    <button class="dropbtn"><b>Insert Information</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="stui.php">For Students</a>
	  <a href="teai.php">For Teachers </a>
	  <a href="admini.php">For Admin</a>
	</div>
	</div> 
	
	<div class="dropdown">
    <button class="dropbtn"><b>View Information</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="stuv.php">For Students</a>
	  <a href="teav.php">For Teachers </a>
	  <a href="adminv.php">For Admin</a>
	</div>
	</div> 
	
	
	
	<a href="logout.php"><b>Logout</b></a>    
  
     
	
 </div> 
</header>
 
<br><br><br><br>






                                                     
                                                                      <h1> <b>Teacher Information </b> </h1>


<form action="tea.php" method="post">
  <b>Teacher_ID:<b><br>
  <input type="text" name="id" value=" ">
  <br>
  <b>Username:<b><br>
  <input type="text" name="username" value=" ">
<br>

 Password:<br>
  <input type="password" name="password" value=" ">
<br>
  
 <br>
  <input type="submit" value="Submit">
  <br><br>
</form> 
<br><br>


</html>
<?php
 include 'footer.php';
 ?>
