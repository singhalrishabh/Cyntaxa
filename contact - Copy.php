 <?php 

	//print_r($_POST); 
	//die();
	$servername = "localhost:3307";
	$username = "root";
	$password = "";
	$dbname = "breza";

	
	$email = $_POST['email'];
	

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn-> connect_error){
		die('connection failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into subscribe(email) values(?)");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		echo "Thank you!";
		$stmt->close();
		$conn->close();
	} 

	
?> 