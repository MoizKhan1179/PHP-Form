<?php 

include('connection.php');

$fetch = "SELECT * FROM `stdinfo`";

$data = mysqli_query($conn, $fetch);

while($row = mysqli_fetch_assoc($data)){
    echo $row ['id'] . "<br>";
     echo $row ['name'] . "<br>";
     echo $row ['age'] . "<br>";
     echo $row ['gender'] . "<br>";
}



?>