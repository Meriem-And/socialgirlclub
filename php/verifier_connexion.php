<?php
session_start();
require('connex.php');
foreach ($_POST as $key => $value) {
    $$key = mysqli_real_escape_string($con, $value);
}


$userName = $_POST["userInfoName"];
$userPassword = $_POST["userInfoPass"];
$sql = "SELECT * FROM userInfo WHERE userInfoName= '$userName'";


$result = mysqli_query($con, $sql);

$userAndPass = mysqli_fetch_assoc($result);
$identicalPass = password_verify($userPassword,$userAndPass["userInfoPass"]);





if($identicalPass){
    $_SESSION["user"]=$userName;
    header("Location: ../index.php");

}
else{
    header("Location: connexion.php");
}


?>
