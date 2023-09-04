<?php
$con = new mysqli("localhost","088876","wachtwoord=goed","checklist");

if (! $con) {
    die("geen connectie" . mysqli_error($con) );
} else {
    echo "jeeeej";
}

<?php
$sql = "SELECT * FROM checklist-info";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
    <?php echo $row["Titel"]; ?>

/*$titel = $_POST['title'];
$description = $_POST['Description'];

$sql = "INSERT INTO `checklist-info` (`ID`, `Titel`, `Beschrijving`, `Done`) VALUES ('0', '$titel', '$description', 'false')";


$rs = mysqli_query($con, $sql);





*/
?>