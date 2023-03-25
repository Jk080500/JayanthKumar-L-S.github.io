<?php
//get data from form  

$email= $_POST['email'];
$message= $_POST['message'];
$to = "jayanthkumar0805@gmail.com";
$subject = "Mail From website";
$txt = email = " . $email . "\r\n message =" . $message;
$headers = "From: noreply@codeconio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:Thankyou.html");
}
if ( isset( $_POST["submit"] ) ) { 
      // (deal with the submitted fields here) 
      header( "Location: Thankyou.html" ); 
      exit; 
//redirect
//
?>
