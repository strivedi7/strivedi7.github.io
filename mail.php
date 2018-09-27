<?php
// the message
$name = $_POST['name'];
$email = $_POST['email'];
$messege = $name."\n".$_POST['messege'];
$headers = "From: thesaurabh@yahoo.com";
$subject = "Automatic mail: From Saurabh Trivedi";

// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// send email
$txt = "Thank you contacting me, \n I will get back to you soon. \n\n Best Regards,\n Saurabh Trivedi";
//mail($to,$subject,$txt,$headers);
mail($email,$subject,$txt,$headers);

$headers = "From: ".$email ;
$subject = "intres to contact";
mail("thesaurabh@yahoo.com",$subject,$messege,$headers);
?>