<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | InFoot</title>
    <link rel="icon" type="image/png" href="images/InFoot.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Graduate&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lemon&display=swap" rel="stylesheet">
</head>

<body class="contact-page"> <!-- Ajout de la classe "contact-page" au body -->

    <?php
    $pageActive = "contact";
    require('header.php');
    ?>

    <main class="contact-page">
        <div class="contact-background">
            <h1>CONTACT</h1>
            <form action="traitements/envoi_mail.php" method="post" class="contact-form">

                <div id="en-tete">
                    <div>
                        <label for="prenom">Prénom <span>*</span></label>
                        <input type="text" name="prenom" id="prenom" placeholder="Lionel" required/>
                    </div>
                    <div>
                        <label for="nom">Nom <span>*</span></label>
                        <input type="text" name="nom" id="nom" placeholder="Messi" required/>
                    </div>
                </div>

                <label for="email">E-mail <span>*</span></label>
                <input type="email" name="email" id="email" placeholder="nom@domaine.fr" required/>

                <label for="type_demande">Précisez votre demande :</label>
                <select name="type_demande" id="type_demande">
                    <option value="information">Information</option>
                    <option value="demande_de_devis">Demande de Devis</option>
                    <option value="reclamation">Réclamation</option>
                </select>

                <label for="message">Message <span>*</span></label>
                <textarea name="message" id="message" placeholder="Votre message" required></textarea>

                <input type="submit" value="Envoyer" />
            </form>
        </div>
    </main>

    <?php
    require('footer.php');
    ?>

</body>

</html>
