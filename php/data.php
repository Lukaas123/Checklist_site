<?php
$con = mysqli_connect("localhost","088876","wachtwoord=goed","checklist");

$titel = $_POST['title'];
$description = $_POST['Description'];

$sql = "INSERT INTO `checklist-info` (`ID`, `Titel`, `Beschrijving`, `Done`) VALUES ('0', '$titel', '$description', 'false')";


$rs = mysqli_query($con, $sql);





?>