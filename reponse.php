<?php
require('php/connex.php');
foreach ($_POST as $key => $value) {
    $$key = mysqli_real_escape_string($con, $value);
}


$userName = $_POST["userInfoName"];
$password_hash = password_hash($_POST["userInfoPass"], PASSWORD_BCRYPT);
$sql = "INSERT INTO userInfo (userInfoName,userInfoPass) VALUES ('$userName','$password_hash')";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: connexion.php");
}
else{
    header("Location: inscription.php");
}


?>
