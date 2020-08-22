<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Student view</title>
<style>

	
			.saidur{
				text-align:center;
				color: white;
				background-image: url("back6.jpg");
			
			}
			
			


table, th, td {
    border: 1px solid black;
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










<h1><b>Student Information View</b></h1>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully\n";

		$sql = "SELECT * FROM stu1";

		$result = $conn->query($sql);
		echo"<table><tr><th>Student_ID</th><th>Username</th><th>Password</th><th>Edit</th><th>Delete</th><th>Print</th></tr>";

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				// HERE EVERY TABLE DATA WILL CONTAIN DIFFRENT ID TO PRINT
				echo "<tr><td id='a".$row['id']."'>".$row['id']."</td><td id='b".$row['id']."'>".$row['username']."</td>";
				echo "<td id='c".$row['id']."'>".$row['password']."</td>";
				

				// EDIT BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name=".$row['id']." value='Edit'></form></td>";
				// DELETE BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name='delete".$row['id']."' value='Delete'></form></td>";
				// PDF BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name='print".$row['id']."' value='Print'></form></td></tr>";

// UPDATE CODE STARTS FROM HERE
				if(isset($_GET[$row['id']])){
					echo"<form action='' method='POST'><div class='p' id='close'>";// CLASS P IS USED TO DECORATION AND ID CLOSE IS USED TO CLOSE THE POPUP PAGE
					echo"Update Information</br></br>";
					echo "Student_ID: <input type='text' name='id' value=".$row['id'].">";
					echo "</br></br>";
					echo "Username: <input type='text' name='username' value=".$row['username'].">";
					echo "</br></br>";
					echo "Password: <input type='text' name='password' value=".$row['password'].">";
					echo "</br></br>";
					
					echo "</br></br>";

					echo"<input type='submit' name = 'submit' value='Update'>";
					echo"<input type='submit' name = 'cancle' value='Cancle'>";
					echo "</div></form>";

					if(isset($_POST['submit'])){
						$id = $_POST["id"];
						$username = $_POST["username"];
						$password = $_POST["password"];
						
						

						$ssql = "UPDATE stu1 SET id='$id', username='$username', password='$password'
						WHERE id=".$row['id']."";
						
						if ($conn->query($ssql) === TRUE) {
						echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
						} else {
						echo "Upadate Unsucessful". $conn->error;
						}

					}
					if(isset($_POST['cancle'])){
						echo "<script>document.getElementById('close').style.display='none'</script>";
					}
				}

				// DELETE CODE STARTS FORM HERE
				if(isset($_GET['delete'.$row['id']])){
					$delete = "DELETE FROM stu1 WHERE id=".$row['id']."";
					if ($conn->query($delete) === TRUE) {
					echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
					echo "<meta http-equiv='refresh' content='0'>"; // THIS IS FOR AUTO REFRESH CURRENT PAGE
					} else {
					echo "Delete Unsuccessful". $conn->error;
					}
				}

				// PDF STARTS FROM HERE
				if(isset($_GET['print'.$row['id']])){

					echo "<script>
					var mywindow = window.open('', 'PRINT', 'height=400,width=600');
					mywindow.document.write('<html><head><title>' + document.title  + '</title>');
					mywindow.document.write('</head><body >');
					mywindow.document.write('<h1>' + 'Reader Information'  + '</h1>');
					mywindow.document.write(document.getElementById('a".$row['id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('b".$row['id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('c".$row['id']."').innerHTML);
					mywindow.document.write(' -- ');
					
					mywindow.document.write('</body></html>');
					mywindow.document.close(); // necessary for IE >= 10
					mywindow.focus(); // necessary for IE >= 10*/

					mywindow.print();
					mywindow.close();
					history.back(); // IT WILL TAKE YOU BAKE PAGE
					</script>";
				}





			}echo"</table>";
		}else{
				echo "No search found!!!";
		}
	$conn->close();
	 ?>
	 <br>
	 


</body>
</html>
<?php
 include 'footer.php';
 ?>