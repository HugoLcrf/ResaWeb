<?php
include("connexion.php")
?>

<?php

$username= $_POST['user-name'];
$userprenom = $_POST['user-prenom'];
$usermail= $_POST['user-mail'];
$day= $_POST['day'];

$requete = "INSERT INTO Reservation (prenom,nom,mail,ext_dates) VALUES ('$userprenom','$username','$usermail','$day')";
$db->query($requete);

$subject = 'LESARDENTES';
$message = "Votre reservations pour le festivales a bien été pris en comptes. Venez vous amusez !!";
    $headers = "From: lesardentes@resaweb.lecerf.butmmi.o2switch.site	"; // la tu remplaces par ton adresse mail cpanel
mail($usermail, $subject, $message, $headers);


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILLETTERIE</title>
    <link rel="icon" href="/Image/logo icons/favicon.ico">
    <link rel="stylesheet" href="Global.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Sora&display=swap"rel="stylesheet"/>

</head>
<body class="billetterie">
    <nav class="navbar navbar sticky-nav">
        <a href="index.html"><img src="Image/logo_anim_04794562be.gif" alt="" class="logoheader"></a>
        <div class="nav-links ">
            <div class="containernav">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_euaveaxu.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay class="astronaute"></lottie-player>
                <ul>
                  <li><a href="index.html">Accueil</a></li>
                    <li><a href="Line-up.php">Line-Up</a></li>
                    <li><a href="Reservation.html">TICKETS</a></li>
                    <li><a href="FAQ.html">F.A.Q</a></li>
                    <li><a href="Actu.html">ACTU</a></li>
                </ul>
            </div>
            
            <div class="iconsnav">
                <a href="https://www.facebook.com/lesardentes"><img class="social-logo"src="Image/icons8-facebook-entouré-150.png" alt=""></a>
                <a href="https://twitter.com/lesardentes"><img class="social-logo" src="Image/Twitter-entouré.png" alt=""></a>
                <a href="https://www.instagram.com/lesardentes/"><img class="social-logo"src="Image/instagram_black_logo_icon_147122.png" alt=""></a>
                <a href="https://www.youtube.com/LesArdentesFestival"><img class="social-logo"src="Image/youtube_black_logo_icon_147044.png" alt=""></a>
                <a href="https://www.tiktok.com/@lesardentes"><img class="social-logo" src="Image/tiktok_logo_icon_186928.png"alt=""></a>
              </div>
        </div>
        <button alt="menu" class="menu-hamburger">MENU</button>
    </nav>

    <div class="titre">
        BILLETTERIE EN LIGNE
    </div>

    <div class="containeuresa">

    <?php
      echo "Bonjour " . $_POST['user-prenom'] . $_POST['user-name'] . " Votre reservations a été valider avec succes "."<br>". " Vous allez bientot recevoir un mail récapitulatif a " . $_POST['user-mail'];
        ?>

    </div>

      <footer class="footerticket">
        <div class="containerfooter">
          <div class="newsletter icons">
            <h3>Inscrivez-vous à notre newsletter</h3>
            <form id="newsletter-form">
              <input
                id="newsletter-email"
                type="email"
                placeholder="Entrez votre adresse e-mail"
              />
              <button type="submit">S'inscrire</button>
            </form>
          </div>
          <div class="icons">
            <a href="https://www.facebook.com/lesardentes"><img class="social-logo"src="Image/logo icons/facebook.png" alt="facebook"></a>
            <a href="https://twitter.com/lesardentes"><img class="social-logo" src="Image/logo icons/Twitter.png" alt="twitter"></a>
            <a href="https://www.instagram.com/lesardentes/"><img class="social-logo"src="Image/logo icons/instagram.png" alt="instagram"></a>
            <a href="https://www.youtube.com/LesArdentesFestival"><img class="social-logo"src="Image/logo icons/youtube.png" alt="youtube"></a>
            <a href="https://www.tiktok.com/@lesardentes"><img class="social-logo" src="Image/logo icons/tiktok.png"alt="tiktok"></a>
          </div>
        </div>
  
        <section class="closure">
          <div class="containerclosure">
            <div class="suplement">
              <a href="Mention.html">Mentions légales</a>
            </div>
            <div class="suplement"><a href="CGU.html">CGU</a></div>
            <div class="suplement">Les Ardentes 2023</div>
          </div>
        </section>
      </footer>
    </body>
    <script src="Global.js"></script>
</html>
