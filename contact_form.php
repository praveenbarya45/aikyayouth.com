<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
    echo "not connected to server";
}

if(!mysqli_select_db($con,'contact_form'))
{
    echo "database not selected";
}

$Name = $_POST['name'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

$sql = "INSERT INTO contact(Name,Email,Subject,Message) VALUES('" . $Name . "','" . $Email . "','" . $Subject . "','" . $Message . "');";

if (!mysqli_query($con,$sql))
{
    echo mysqli_error($con);
}
else
{
    echo "inserted";
}
?>
    










                   
                    
                    