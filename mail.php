<?php
//get data from form  

$email= $_POST['email'];
$message= $_POST['message'];
$to = "jayanthkumar0805@gmail.com";
$subject = "Mail From website";
$Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@jkdev.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:Thankyou.html");
}
//redirect
//
?>
