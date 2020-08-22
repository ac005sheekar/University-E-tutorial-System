<?php
 include 'header.php';
 ?>
<html>
<head>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" 
                                                     
                                                                      <h1> <b>Admin Information </b> </h1><br>
																	  


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
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];



$sql = "INSERT INTO admin1 (id, username, password) VALUES('$id','$username','$password')";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id== "" || $username== "" || $password== "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

header("refresh:4;url=teai.php");
?>
<?php
 include 'footer.php';
 ?>