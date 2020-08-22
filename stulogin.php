<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<style >
			body{
				text-align:center;
				color: white;
				background-image: url("back6.jpg");
			
			}
			
			


	</style>
</head>
<body>



<?php
session_start();
if(isset($_POST['bttLogin'])){
	require 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($con, 'select * from stu1 where username="'.$username.'" and password= "'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$_SESSION['username'] = $username;
		header('location: hhome.php');// header location shift to logout page
	}
	else
		echo "Account invalid";
}
if (isset($_GET['logout'])){
	session_unregister('username');
}
?>









<br>
<div>
<br><br>
<h2>Student Login</h2>

<form method="post">
	
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"></td>
	</tr><br><br><br>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr><br><br><br>
		<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="bttLogin" value="Login"></td>
	</tr>
	</table>
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
 include 'footer.php';
 ?>

</body>
</html>