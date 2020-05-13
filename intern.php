<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$date = $_REQUEST['date'];
$telephone = $_REQUEST['tel'];
$gender = $_REQUEST['gender'];
$pwe = $_REQUEST['name1'];
$subject = "Intern Form submission";
$message = "Name : " . $name . "\nEmail : " . $email . "\nDate : " . $date . "\nTelephone No. : " . $telephone . "\nGender : " . $gender . "\nPrevious Work Experience(link if possible) : " .$pwe;

//check input feilds
if (empty($name) || empty($email) || empty($gender) || empty($telephone))
{
    echo "Please fill all the Feilds";
}
else
{
    mail("navneetbajpai1999@gmail.com", $subject , $message , "From: $name <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>


