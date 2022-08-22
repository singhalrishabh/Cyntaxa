


<?php
//get data from form  

$name = $_POST['name'];
$nuber = $_POST['number'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "1708contact@gmail.com";
$subject = "Mail From breza";
$txt ="Name = ". $name . " \r\nNumber = ". $number . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
$headers = "From: noreply@breza.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>