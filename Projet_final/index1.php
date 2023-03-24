<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Afficher une image</title>
        <meta charset="utf-8">
    </head>
    <body>
        <a href="photoexport.php?id= <?php echo $_SESSION['id']; ?>">Afficher l'image</a>
    </body>
</html>