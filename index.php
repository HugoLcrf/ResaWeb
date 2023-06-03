<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resaweb</title>
  <link rel="icon" href="/Image/logo icons/favicon.ico">
  <link rel="stylesheet" href="resaweb.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Sora&display=swap" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar sticky-nav">
    <div class="nav-links">
        <div class="containernav">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_euaveaxu.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay class="astronaute"></lottie-player>
            <ul>
              <li><a href="index.php" alt="Accueil">Accueil</a></li>
                <li><a href="Line-up.php" alt="Line-up">Line-Up</a></li>
                <li><a href="Reservation.html" alt="Billeteries">TICKETS</a></li>
                <li><a href="FAQ.html" alt="FAQ">F.A.Q</a></li>
                <li><a href="Actu.html" alt="Actualité">ACTU</a></li>
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
    <button tabindex="0" alt="menu" class="menu-hamburger">MENU</button>
</nav>

  <section class="homepage">
    <img src="Image/logo_anim_04794562be.gif" alt="" class="logo">
    <img src="Image/tear-1.png" alt="" class="tear1">

  </section>

  <section class="ticket">
    <div class="containerT">
      <img src="Image/Enceinte.png" alt="" class="enceinte">
      <div>
        <p> ACHETEZ MES TICKETS</p>
        <p>PASS 4J & BILLETS JOUR </p>
        <a href="Reservation.html" class="resa">J'ACHETE MON BILLET</a>
      </div>
    </div>

  </section>

  <section class="artiste">
    <img src="Image/Aristes.png" alt="" class="artistes">

    <div class="carousel-container">
      <div class="carousel">
    <?php

//connexion a la bdd

include("connexion.php");



//demande des DERNIERS voyages ajoutés (5 derniers uniquement)

$requete = "SELECT * FROM artistes ORDER BY ajout_date DESC LIMIT 5";


$stmt = $db->query($requete);

$resultat = $stmt->fetchall(PDO::FETCH_ASSOC);

?>
      <?php foreach ($resultat as $review) echo "


<div class=\"carousel-item\">

    <img src=\"{$review["artistes_photo"]}\" alt= \"\">

</div>"
?>
    </div>
    <button class="prev"> < </button> 
    <button class="next"> > </button>
    </div>
    </div>

    <a href="Line-up.php" class="lineUp" alt="lineUp">line-up 23</a>


  </section>
  <section class="Question">
    <div>
      <p>Une question ?
        Nous avons (sûrement) la réponse !</p>
      <a href="FAQ.html" class="reponse" alt="FAQ">
          Cherchez la reponse
      </a>
    </div>

    <img src="Image/scene.png" alt="" class="scene">

  </section>

  <div class="marquee marquee--reverse">
    <ul class="marquee__content">
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
    </ul>

    <ul aria-hidden="true" class="marquee__content">
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
      <li>2023</li>
      <li>LES ARDENTES</li>
    </ul>
  </div>

  <section class="actualite">
    <h2>LES ACTUALITES</h2>

    <div class="block1">
      <a href="Actu.html" alt="Actualité 1">
        <img src="Image/raplum.jpg" alt="">
        <div class="block"> LA SCÈNE RAPLUME X LES ARDENTES DÉVOILÉE !</div>
        <p>18 APR 23</p>
      </a>
    </div>

    <div class="block2">
      <a href="Actu2.html" alt="Actualité 2">
        <img src="Image/Artistes/luther.jpg" alt="">
        <div class="block"> RÉCAP DES SORTIES DE MARS !</div>
        <p>06 APR 23</p>
      </a>
    </div>

    <div class="block1">
      <a href="Actu3.html" alt="Actualité 3">
        <img src="Image/Artistes/ashe22.jpg" alt="">
        <div class="block"> ASHE22, NES ET LESRAM AUX ARDENTES !</div>
        <p>22 MAR 23</p>
      </a>
    </div>

  </section>

  <img src="Image/tear-1.png" alt="" class="tear2">

  <section class="Partenaires">

    <section class="containerpartenaire">
      <h3>Nos Partenaires</h3>
      <div class="IMGpartenaire">
        <div class="column1">
          <img src="Image/logo icons/424px-Liege_Logo.svg.png">
          <img src="Image/logo icons/Fédération_Wallonie-Bruxelles_logo_201.png">
          <img src="Image/logo icons/coca.png">
        </div>
        <div class="column2">
          <img src="Image/logo icons/HavanaClub.png">
          <img src="Image/logo icons/decathlon.png">
          <img src="Image/logo icons/ING.png">
        </div>

      </div>
    </section>
  </section>

  <footer>
    <div class="containerfooter">
      <div class="newsletter icons">
        <h3>Inscrivez-vous à notre newsletter</h3>
        <form id="newsletter-form">
          <input id="newsletter-email" type="email" placeholder="Entrez votre adresse e-mail" alt="Newsletter">
          <button type="submit">S'inscrire</button>
        </form>
      </div>
      <div class="icons">
        <nav class="footer-nav"> <a href="Reservation.html" alt="billeterie">TICKETS</a> </nav>
        <a href="https://www.facebook.com/lesardentes"><img class="social-logo"src="Image/logo icons/facebook.png" alt="facebook"></a>
        <a href="https://twitter.com/lesardentes"><img class="social-logo" src="Image/logo icons/Twitter.png" alt="twitter"></a>
        <a href="https://www.instagram.com/lesardentes/"><img class="social-logo"src="Image/logo icons/instagram.png" alt="instagram"></a>
        <a href="https://www.youtube.com/LesArdentesFestival"><img class="social-logo"src="Image/logo icons/youtube.png" alt="youtube"></a>
        <a href="https://www.tiktok.com/@lesardentes"><img class="social-logo" src="Image/logo icons/tiktok.png"alt="tiktok"></a>
      </div>
    </div>

    <section class="closure">
      <div class="containerclosure">
        <div class="suplement"> <a href="Mention.html" alt="Mentions légales">Mentions légales</a></div>
        <div class="suplement"> <a href="CGU.html" alt="Condition generales d'utilisation">CGU</a></div>
        <div class="suplement">Les Ardentes 2023</div>
      </div>
    </section>
  </footer>

  </body>
  <script src="Global.js"></script>

  </html>