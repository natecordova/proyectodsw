<?php

// Get values from form
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$to = "natecordovaortiz@hotmail.com";
$subject = "Contacto desde el sitio web";
$message = " Name: " . $name . "\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email;


$from = "natecordovaortiz@hotmail.com";
$headers = "From:" . $from . "\r\n";
/*$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; */

mail("natancordovaortiz@gmail.com",$subject,$message,$headers)

/*  print "<script>document.location.href='success.html';</script>";*/
  // Created by Future Tutorials



?>
