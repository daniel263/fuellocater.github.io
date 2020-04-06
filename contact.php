<?php
if(isset($_POST['submit'])) {
$name= $_POST['name'];
$client_email= $_POST['email'];
$message= $_POST['message'];

$email_from= $client_email;
$email_subject= "Enquiry Fuel_locater";
$email_body="Client Name: $name.\n".
                        "Client Email: $client_email.\n" . 
                            "client Message: $message.\n";

         $to = "danielmshaty@gmail.com";
         $headers = "From : $email_from\r\n";
         $headers .= "Reply-To:$client_email \r\n";
         mail($to,$email_subject,$email_body,$headers);
         header("Location: index.php?mailsend");

}
?>

