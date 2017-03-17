<?php
session_start(); // On démarre la session AVANT toute chose
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Use Superglobal</title>
    </head>
    <body>
    <p>Hello Again!</p>
    <p>
        I remember you! Your name is <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
        And about your age... You are <?php echo $_SESSION['age']; ?> years old, isn't it? :D
    </p>
    </body>
</html>