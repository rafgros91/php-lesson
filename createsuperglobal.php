<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Raf';
$_SESSION['nom'] = 'Gros';
$_SESSION['age'] = 25;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Create Superglobal</title>
    </head>
    <body>
    <p>
        Hey <?php echo $_SESSION['prenom']; ?> !<br />
        You are on the homepage (index.php). Do you want to go to another page?
    </p>
    <p>
        <a href="usesuperglobal.php">Lien vers usesuperglobal.php</a><br />
    </p>
    </body>
</html>