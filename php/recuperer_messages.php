<?php


require('connex.php');

$sql = "SELECT * from livreor";

$result = mysqli_query($con, $sql);
$total = mysqli_num_rows($result);
if ($total > 0) {
    while ($row = mysqli_fetch_array($result)) {


        echo "<div>". $row['pseudo'] . " a : " .$row['dateMessage']."</div>";

        echo  "<div>". $row['message']."</div> <hr>";


    }


}

?>
