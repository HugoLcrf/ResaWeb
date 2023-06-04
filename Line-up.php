<?php
include("connexion.php")
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Line-up</title>
  <link rel="icon" href="/Image/logo icons/favicon.ico">
	<link rel="stylesheet" href="Global.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Sora&display=swap" rel="stylesheet">
</head>
<body>
	
</body>
</html>
<body class="bodylineup">
    <nav class="navbar navbar sticky-nav">
        <a href="index.php"><img src="Image/logo_anim_04794562be.gif" alt="Accueil" class="logoheader"></a>
        <div class="nav-links ">
            <div class="containernav">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_euaveaxu.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay class="astronaute"></lottie-player>
                <ul>
                  <li><a href="index.php">Accueil</a></li>
                    <li><a href="Line-up.php">Line-Up</a></li>
                    <li><a href="Reservation.html">TICKETS</a></li>
                    <li><a href="FAQ.html">F.A.Q</a></li>
                    <li><a href="Actu.html">ACTU</a></li>
                </ul>
            </div>
            
            <div class="iconsnav">
                <a href="https://www.facebook.com/lesardentes"><img class="social-logo"src="Image/logo icons/facebook.png" alt="facebook"></a>
                <a href="https://twitter.com/lesardentes"><img class="social-logo" src="Image/logo icons/Twitter.png" alt="twitter"></a>
                <a href="https://www.instagram.com/lesardentes/"><img class="social-logo"src="Image/logo icons/instagram.png" alt="instagram"></a>
                <a href="https://www.youtube.com/LesArdentesFestival"><img class="social-logo"src="Image/logo icons/youtube.png" alt="youtube"></a>
                <a href="https://www.tiktok.com/@lesardentes"><img class="social-logo" src="Image/logo icons/tiktok.png"alt="tiktok"></a>
              </div>
        </div>
        <button alt="menu" class="menu-hamburger">MENU</button>
    </nav>
    
    <div class="container">
        <div class="FAQimg">
            <img src="Image/FAQlarge.jpg" alt="" >
                <div class="FAQtext">
                    <h1>Line-Up 23</h1>
                </div>
        </div>
    </div>

    <div class="recherche">
      <a href="Line-up.php?tri=artistes_nom">A-Z</a>
      <br><a href="Line-up.php?date=1">DATES</a>
      <a href="Line-up.php?date1">06 JUL</a>
      <a href="Line-up.php?date2">07 JUL</a>
      <a href="Line-up.php?date3">08 JUL</a>
      <a href="Line-up.php?date4">09 JUL</a>
    </div> 

    <div class="classement">
        <?php

$request = "SELECT * FROM artistes, dates WHERE id_artistes AND id_dates=ext_dates";

//tri par jour precis
//06 JUL
if (isset($_GET["date1"])){
  $request = "SELECT * FROM artistes, dates WHERE ext_dates = 1 " . $_GET["date1"]. " LIMIT 9";
}
//07 JUL

if (isset($_GET["date2"])){
  $request = "SELECT * FROM artistes, dates WHERE ext_dates = 2 " . $_GET["date2"]. " LIMIT 9,9";
}
//08 JUL

if (isset($_GET["date3"])){
  $request = "SELECT * FROM artistes, dates WHERE ext_dates = 3 " . $_GET["date3"]. " LIMIT 18,9";
}

//09 JUL
if (isset($_GET["date4"])){
  $request = "SELECT * FROM artistes, dates WHERE ext_dates AND id_dates = 4 " . $_GET["date4"]. " LIMIT 27,9";
}

//Tri par ordre alphabetique
if (isset($_GET["tri"])){
	$request = $request . " ORDER BY {$_GET["tri"]}";
}

$stmt = $db->query($request);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row){
?>

	<div class='tri'>
    <div class='daynom'>
    <div class='nom'><?= $row["artistes_nom"] ?></div>
    <div><?= $row["day_dates"] ?></div>
    </div>
    <img src="<?= $row["artistes_photo"] ?>" alt="Image" height="300px" width="400px">

    </div>

<?php
}
?>      
    </div>
    <footer>
        <div class="containerfooter">
          <div class="newsletter icons">
            <h3>Inscrivez-vous à notre newsletter</h3>
            <form id="newsletter-form">
              <input id="newsletter-email" type="email" placeholder="Entrez votre adresse e-mail">
              <button type="submit">S'inscrire</button>
            </form>
          </div>
          <div class="icons">
            <nav class="footer-nav"> <a href="">TICKETS</a> </nav>
            <a href="https://www.facebook.com/lesardentes"><img class="social-logo"src="Image/logo icons/facebook.png" alt="facebook"></a>
            <a href="https://twitter.com/lesardentes"><img class="social-logo" src="Image/logo icons/Twitter.png" alt="twitter"></a>
            <a href="https://www.instagram.com/lesardentes/"><img class="social-logo"src="Image/logo icons/instagram.png" alt="instagram"></a>
            <a href="https://www.youtube.com/LesArdentesFestival"><img class="social-logo"src="Image/logo icons/youtube.png" alt="youtube"></a>
            <a href="https://www.tiktok.com/@lesardentes"><img class="social-logo" src="Image/logo icons/tiktok.png"alt="tiktok"></a>
          </div>
        </div>
    
        <section class="closure">
          <div class="containerclosure">
            <div class="suplement"> <a href="Mention.html">Mentions légales</a></div>
            <div class="suplement"> <a href="CGU.html">CGU</a> </div>
            <div class="suplement">Les Ardentes 2023</div>
          </div>
        </section>
      </footer>
</body>


<script src="Global.js"></script>
</table>
