<?php
include_once 'data.php';

if(isset($_POST['submit'])){
    $titel = $_POST['title'];
    $beschr = $_POST['Description'];

    $sql = "INSERT INTO kaaslist (titel, beschrijving) 
            VALUES ('$titel', '$beschr');";

    if(mysqli_query($conn, $sql)) {
        header('location: https://88876.stu.sd-lab.nl/jaar2/intro/index.php');
        exit;
    } else {
        echo 'FUCK YOUUUUUU';
    }
}


?>