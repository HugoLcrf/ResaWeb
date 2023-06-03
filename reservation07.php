<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 JUL</title>
    <link rel="icon" href="/Image/logo icons/favicon.ico">
    <link rel="stylesheet" href="Global.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Sora&display=swap"rel="stylesheet"/>
</head>
<body>
<body class="billetterie">
    <nav class="navbar navbar sticky-nav">
        <a href="index.php"><img src="Image/logo_anim_04794562be.gif" alt="Accueil" class="logoheader"></a>
        <div class="nav-links ">
            <div class="containernav">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_euaveaxu.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay class="astronaute"></lottie-player>
                <ul>
                  <li><a href="index.php">Accueil</a></li>
                    <li><a href="Line-up.php">Line-Up</a></li>
                    <li><a href="#">TICKETS</a></li>
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

    <div class="titre">
        BILLETTERIE EN LIGNE
    </div>

    <div class="containeuresa">
    <?php
include("connexion.php")
?>

<head>
    <body>
        <form action="action.php" method='POST'>
            Réserver votre billets pour le 07 Juillet 2023 (50 caracteres maximum par champs):
        <div>
        <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user-prenom"required alt="prenom">
        </div>
        <div>
           <label for="name">Nom :</label>
            <input type="text" id="name" name="user-name" required alt="nom">
        </div> 
        <div>
            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="user-mail" required alt="mail">
        </div>
        <div class="button">
            <button type="submit" name="day" value="2" required aria-describedby="reservé">Reservé</button>
        </div>
        <a href="reservation1.html" class="tromper">Trompé de jour ? Revenez en arrière</a>

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
<script>
        // Générer une alerte JavaScript lorsque le bouton "back" est utilisé
        window.onbeforeunload = function() {
            return 'Vous avez utilisé la fonctionnalité "back" de l\'historique du navigateur.';
        };
    </script>
</html>