<?php
// variable setting
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$details = "First Name : " . $fname . "\nLast Name : " . $lname . "\nEmail : " . $email . "\nMessage : " . $message;

//check input feilds
if (empty($fname) || empty($lname) || empty($email) || empty($message))
{
    echo "Please fill all the Feilds";
}
else
{
    mail("navneetbajpai1999@gmail.com", "AikyaYouth Message" , $details , "From: $name <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>