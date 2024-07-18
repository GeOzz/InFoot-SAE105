<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil | InFoot</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" type="image/png" href="images/InFoot.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Graduate&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lemon&display=swap" rel="stylesheet">
</head>

<body>

  <?php
  $pageActive = "accueil";
  require('header.php');
  ?>

  <main>
<!-- postion:relative  -->
    <div class="fixed-fond">
      <video class="video-absolute" autoplay muted loop src="./images/Ronaldo1.mp4"></video>
    <div id="fond-foot" class="scroll-animation">
      <div id="titre">
        <strong id="index-50">LES 50 MEILLEURS JOUEURS DE</strong><br>
        <strong id="index-foot">FOOTBALL</strong>
        <div id="animated-football-emoji">⚽</div>
      </div>
    </div>
    </div>

    <h1 class="scroll-animation">LES DEBUTS DU FOOTBALL : UNE HISTOIRE EXCEPTIONNELLE</h1>
    <div id="histoire-foot" class="scroll-animation">
      <div id=histoire-foot-texte>
        <p>Depuis 72 ans, le football règne en maître sur la scène mondiale,
          captivant les foules et forgeant une légende inégalée.
          Sous l'égide de la FIFA, cette discipline a rassemblé les talents
          de la planète entière, offrant 1079 Grands Prix de moments magiques.
          La Scuderia Ferrari du football se dessine à travers des clubs légendaires
          tels que le FC Barcelone, le Real Madrid, et le Bayern Munich, cumulant 16
          réalisations. Sur le devant de la scène individuelle, des génies comme Pelé,
          Maradona, Messi, et Ronal do ont ébloui le monde, chacun portant fièrement 7 titres majeurs.
        </p>
      </div>
      <video class="video-absolute" src="./images/Neymar.mp4" autoplay muted loop id="histoire-foot-image" class="scroll-animation"></video>
    </div>

    <h1 class="scroll-animation">LE FOOTBALL : LE SPORT N°1 SUR LA PLANETE</h1>
    <div id="histoire-foot" class="scroll-animation">
      <div id=histoire-foot-texte>
        <p>Le football, véritable phénomène mondial, se hisse au sommet en tant que sport numéro
          un sur la planète. Ce jeu captivant transcende les frontières, rassemblant des millions
          de passionnés de tous horizons. Son pouvoir unificateur se manifeste sur les terrains
          de quartier, dans les stades majestueux et même au-delà des continents. Les exploits
          des grandes équipes et des légendes du football résonnent dans le cœur des amateurs,
          créant une toile d'admiration qui enveloppe le globe.
        </p>
      </div>
      <video class="video-absolute" src="./images/Messi.mp4" autoplay muted loop id="histoire-foot-image" class="scroll-animation"></video>
    </div>
    <div id="planete-foot" class="scroll-animation">
    </div>

  <?php
  require('footer.php');
  ?>

  <script src="js/script.js"></script>
  </main>
</body>

</html>
