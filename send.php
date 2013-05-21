<?php


// checks if post exists, then send the message to $to email
if($_POST['subject']){
 $to = 'loganw@rhodesbread.com'; // replace this with a proper email
 $subject = $_POST['subject'];
 $from = $_POST['email'];
 $message = $_POST['message'];
 $message = "Name : ".$_POST['name']."\nEmail : ".$from."\n\nSubject: ".$_POST['subject']."\n\nMessage : ".$message;
 $headers = "From:" . $from;
 mail($to,$subject,$message,$headers);

return false;
}

?>