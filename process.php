<?php
include("connection.php");
if(isset($_POST['submit']));
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $result = mysqli_query($con, "Insert into contact values('$name','$email','$phone','$message')");
}
if ($result){
    echo"Registration Sucess";
}
else{
    echo"failed";
}
?>