<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = "Subscriber";
$message = "Name : " . $name . "\nEmail : " . $email;
//check input feilds
if (empty($email))
{
    echo "Please fill all the Feilds";
}
else
{
    mail("navneetbajpai1999@gmail.com", $subject , $message , "From: $email");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>