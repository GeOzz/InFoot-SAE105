<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | InFoot</title>
    <link rel="icon" type="image/png" href="../images/InFoot.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Graduate&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lemon&display=swap" rel="stylesheet">
</head>
<body>

    <?php
    $pageActive = "contact";
    require('../header.php');
    ?>

    <main class="contact-main">
        <div class="contact-background">
        <h1>CONTACT</h1>

<div class="contact-form">
    <?php
// Vérification de l'appel via le formulaire
if (count($_POST) == 0) {
    // Si le tableau est vide, on affiche le formulaire
    header('location: ../contact.php');
    exit;
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$message = $_POST['message'];
$email = $_POST['email'];
$type_demande = $_POST['type_demande'];

// Traitement des données
$prenom = mb_strtolower($prenom);
$nom = mb_strtolower($nom);

// Mettre la première lettre du prénom en majuscule
$prenom = ucfirst($prenom);

// Mettre la première lettre du nom en majuscule
$nom = ucfirst($nom);

// Vérification des données du formulaire
$affichage_retour = '';
$erreurs = 0;

// Vérification du champ nom
if (empty($nom)) {
    $affichage_retour .= 'Le champ NOM est obligatoire<br>';
    $erreurs++;
}

// Vérification du champ email
if (empty($email)) {
    $affichage_retour .= 'Le champ EMAIL est obligatoire<br>';
    $erreurs++;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $affichage_retour .= 'Adresse mail incorrecte<br>';
    $erreurs++;
}

// Préparation des variables pour l'envoi du mail de contact
$subject = 'SAE105 : demande de ' . $prenom . ' ' . $nom . ' (' . $type_demande . ')';
$headers['From'] = $email;               // Pour pouvoir répondre à la demande de contact
$headers['Reply-to'] = $email;           // On donne l'adresse de l'utilisateur comme adresse de réponse
$headers['X-Mailer'] = 'PHP/' . phpversion();
$headers['Content-Type'] = 'text/plain; charset=UTF-8'; // Ajout de cette ligne pour spécifier l'encodage

// On fixe l'adresse du destinataire - Pour ce Mail il s'agit de notre adresse MMI@mmi-troyes.fr
$email_dest = "mmi23b01@mmi-troyes.fr";

// Envoi du mail avec confirmation d'envoi (ou pas)
if ($erreurs == 0) {
    // Préparation des données pour le mail de contact
    $messageBody = "Bonjour $prenom $nom,\n\n";
    $messageBody .= "Merci d'avoir contacté InFoot. Nous avons bien reçu votre demande.\n";
    $messageBody .= "Voici un récapitulatif de votre message :\n\n";
    $messageBody .= "Message : $message\n\n";
    $messageBody .= "Nous vous contacterons dès que possible.\n\n";
    $messageBody .= "Cordialement,\nL'équipe InFoot";

    // Envoi du mail de contact
    if (mail($email_dest, $subject, $messageBody, $headers)) {
        $erreurs = 0;
        
        // Préparation des données pour la confirmation
        $subject_confirmation = 'Confirmation de votre demande';
        $headers_confirmation['From'] = 'mmi23b01@mmi-troyes.fr';
        $headers_confirmation['Reply-to'] = 'no-reply@mmi-troyes.fr';
        $headers_confirmation['X-Mailer'] = 'PHP/' . phpversion();
        $headers_confirmation['Content-Type'] = 'text/plain; charset=UTF-8'; // Ajout de cette ligne pour spécifier l'encodage

        // Préparation des données pour le mail de confirmation
        $messageBody_confirmation = "Bonjour $prenom $nom,\n\n";
        $messageBody_confirmation .= "Merci d'avoir contacté InFoot. Nous avons bien reçu votre demande.\n";
        $messageBody_confirmation .= "Voici un récapitulatif de votre message :\n\n";
        $messageBody_confirmation .= "Message : $message\n\n";
        $messageBody_confirmation .= "Nous vous contacterons dès que possible.\n\n";
        $messageBody_confirmation .= "Cordialement,\nL'équipe InFoot";

        // Envoi du mail de confirmation à l'utilisateur
        if (mail($email, $subject_confirmation, $messageBody_confirmation, $headers_confirmation)) {
            $erreurs = 0;
        } else {
            $erreurs++;
        }
    } else {
        $erreurs++;
    }

    // Détermination du message à afficher après les tentatives d'envoi
    $affichage_retour = 'Votre demande a bien été envoyée';

    if ($erreurs != 0) {
        $affichage_retour = 'Echec de l\'envoi du message';
    }
}

// Affichage des messages à l'utilisateur
echo '<div id="reussite">' . "\n";
echo '<p>' . $affichage_retour . '</p>' . "\n";
echo '<form action="../contact.php">' . "\n";
echo '<button class="retour-button" onclick="window.location.href=\'../contact.php\'">Retour au Contact</button>';
echo '</form>' . "\n";
echo '</div>' . "\n";
?>
</div>
</main>

    <?php
    require('../footer.php');
    ?>

</body>
</html>