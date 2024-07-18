<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partenaires | InFoot</title>
    <link rel="icon" type="image/png" href="images/InFoot.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php
    $pageActive = "partenaires";
    require('header.php');
    ?>

<main>
        <div class="partenaire-background">
        <div class="center-container">
            <h1>PARTENAIRES</h1>
            <p>
            Nous sommes un groupe d'amis unis par des idées ambitieuses. 
            <br>Ensemble, nous combinons nos forces pour donner vie à nos projets. 
            <br>Découvrez notre équipe et nos sites :
            </p>
        </div>

        <div class="cards-container">
            <a href="/">
                <div class="card-container">
                    <div class="card">
                        <h3>InFoot</h3>
                        <div class="card-content">
                            <div class="img-container">
                                <img src="../images/Sofiane.jpg" alt="sofiane-aliane">
                                <h4>Sofiane ALIANE</h4>
                            </div>
                            <p> Salut, moi c'est Sofiane. Passionné de football depuis toujours,
                                j'ai décidé de créer un site dédié au monde du football.
                                Vous y trouverez un classement des 50 meilleurs joueurs de l'histoire.</p>
                            </div>
                    </div>
                    <div></div>
                    <p>Cliquez pour revenir à l'Accueil</p>
                </div>
            </a>

            <a href="http://mmi23b05.sae105.ovh" target="_blank">
                <div class="card-container">
                    <div class="card">
                        <h3>infAuto</h3>
                        <div class="card-content">
                            <div class="img-container">
                                <img src="../images/Enzo.jpg" alt="enzo-dernois">
                                <h4>Enzo DERNOIS</h4>
                            </div>
                            <p> Je me présente, Enzo, passionné de sport automobile depuis tout petit,
                                j'ai choisi de créer un site sur le sport automobile.
                                Explorez et découvrez de nombreuses présentations d'écuries, de pilotes,
                                et l'histoire des grands prix qui ont marqué cette discipline.</p>
                        </div>
                    </div>
                    <div></div>
                    <p>Cliquez pour accéder au site</p>
                </div>
            </a>
            
            <a href="http://mmi23b03.sae105.ovh/" target="_blank">
                <div class="card-container">
                    <div class="card">
                        <h3>LOL.GG</h3>
                        <div class="card-content">
                            <div class="img-container">
                                <img src="../images/Kieran.jpg" alt="kieran-bourreau">
                                <h4>Kieran BOUREAU</h4>
                            </div>
                            <p>Enthousiaste de l'univers de League of Legends,
                                j'ai créé ce site pour partager ma passion du jeu.
                                Explorez les meilleurs champions du dernier patch et leur rang,
                                et plongez dans l'univers compétitif de League of Legends.</p>
                        </div>
                    </div>
                    <div></div>
                    <p>Cliquez pour accéder au site</p>
                </div>
            </a>

            <a href="https://www.youtube.com/watch?v=vZMlqlPcxAQ" target="_blank">
                <div class="card-container">
                    <div class="card">
                        <h3>BrosTracker</h3>
                        <div class="card-content">
                            <div class="img-container">
                                <img src="../images/Benjamin.jpg" alt="benjamin-bonneau">
                                <h4>Benjamin BONNEAU</h4>
                            </div>
                            <p>Passionné par l'univers de Super Smash Bros,
                                ce site est dédié à tous les fans du jeu.
                                Découvrez les personnages, les arènes et plongez
                                dans l'excitation des combats de Super Smash Bros.</p>
                        </div>
                    </div>
                    <div></div>
                    <p>Cliquez pour accéder au site</p>
                </div>
            </a>
        </div>

        <div id="livrables">
    <div id="charte-projet"><a href="sae106/Charte_de_Projet.pdf" target="_blank">CHARTE DE PROJET</a></div>
    <div id="planning"><a href="sae106/Plan_de_Projet.pdf" target="_blank">PLAN DE PROJET</a></div>
        </div>


</main>

    <?php
    require('footer.php');
    ?>

</body>

</html>
