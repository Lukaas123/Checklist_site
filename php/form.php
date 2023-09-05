<?php
$titel = $_POST['title'];
$beschr = $_POST['Description'];

if (empty($titel||$beschr)) {
    echo "Name is empty";
  } else {
    $sql = "INSERT INTO kaaslist (titel, beschrijving) VALUES ($titel, $beschr)";
    if(mysqli_query($conn, $sql)) {
        mysqli_query($conn, $sql);
        header('Location: https://88876.stu.sd-lab.nl/jaar2/intro/index.php');
        exit;
    } else {
        echo ("failed connection");
    }
}


?>