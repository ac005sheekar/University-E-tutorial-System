<?php
 include 'header.php';
 ?>
<html>
<head>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" 
                                                     
                                                                      <h1> <b>Feedback for the Tutorial </b> </h1><br>
																	  


  
	
	<b>Student_ID:<b><br>
  <input type="text" name="id" value=" ">
	Write your Feedback here:<br><br>
	<input type="text" name="feed_tuto" value=" "><br>
	
	<br><br><br>
	<input type = "submit" value = "Submit the Feedback">



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

$feed_tuto = $_POST['feed_tuto'];


$sql = "INSERT INTO feed_tuto (id, feed_tuto) VALUES('$id', '$feed_tuto')";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id== "" || $feed_tuto== "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

header("refresh:4;url=feedtuto.php");
?>
<?php
 include 'footer.php';
 ?>