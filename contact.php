 <?php 

	//print_r($_POST); 
	//die();
	$servername = "localhost:3307";
	$username = "root";
	$password = "";
	$dbname = "breza";

	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];	

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn-> connect_error){
		die('connection failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into contact(name, number, email, message) values(?,?,?,?)");
		$stmt->bind_param("ssss", $name , $number , $email , $comments);
		$stmt->execute();
		echo "we will reach you soon Thank you!";
		$stmt->close();
		$conn->close();
	} 

	
?> 