<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carousel.css">
</head>
<body>

<?php

//connexion a la bdd

include("connexion.php");



//demande des DERNIERS voyages ajoutés (5 derniers uniquement)

$requete = "SELECT * FROM artistes ORDER BY ajout_date DESC LIMIT 5";


$stmt = $db->query($requete);

$resultat = $stmt->fetchall(PDO::FETCH_ASSOC);

?>

<div class="owl-container">

        <h5>OUR LATEST DESTINATIONS</h5>

        <div class="owl-carousel owl-theme">


            <?php foreach ($resultat as $review) echo "


        <div class=\"item\">

            <img src=\"{$review["artistes_photo"]}\" alt=\"\">

            <div class=\"glass\">

                <h2>{$review["artistes_nom"]}</h2>

            </div>

        </div>

    </a>"

            ?>
    
</body>
<script src="carousel.js"></script>
</html>