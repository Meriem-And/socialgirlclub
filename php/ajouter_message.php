<?php
session_start();

require('connex.php');
date_default_timezone_set("America/Toronto");

$pseudo =mysqli_real_escape_string($con, $_POST["pseudo"]);
$message = mysqli_real_escape_string($con, $_POST["message"]);
$date= date('d-m-Y h:i:s');

echo $_POST["message"];
echo $_POST["pseudo"];
echo $date;



$sql = "INSERT INTO  livreor(pseudo, message, dateMessage) VALUES ('$pseudo','$message', '$date')";

$result =  mysqli_query($con, $sql);

var_dump($result);
if($result){
    header("Location: ../livreOr.php");

}
else{
    header("Location: ../error.php");
}
