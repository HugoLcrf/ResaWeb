<?php
include("connexion.php")
?>

<?php

$username= $_GET['user-name'];
$userprenom = $_GET['user-prenom'];
$usermail= $_GET['user-mail'];
$day= $_GET['day'];

$requete = "INSERT INTO Reservation (prenom,nom,mail,ext_dates) VALUES ('$userprenom','$username','$usermail','$day')";
$db->query($requete);




?>