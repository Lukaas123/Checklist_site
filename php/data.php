<?php
$host = 'localhost'; // De hostnaam van de database-server
$db_name = 'checklist'; // De naam van de database
$username = '088876'; // De gebruikersnaam voor de database
$password = 'wachtwoord=goed'; // Het wachtwoord voor de database

$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>