<html>
<head>
	<style>
		body{
			text-align: center;
			color: white;
			background-image: url("back12.jpg");
		
		}
		a{
			color: white;
		
		}
		
	</style>


</head>
<body>
<?php
session_start();
echo '<br><br><br><br><h2>Thank you for using the Tutorial</h2><br><br><br> '.$_SESSION['username'];
echo '<br> <h1><a href="home.php? action=logout"> logout </a> </h1>' ;
?>

</body>

</html>