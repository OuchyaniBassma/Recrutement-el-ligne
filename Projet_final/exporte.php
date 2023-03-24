<?php 
    include("database.php");
    $req=$bdd->prepare("select * from images where id_i=? limit 1");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute(array($_GET["id_i"]));
    $tab=$req->fetchAll();
    echo $tab[0]["nomImg"];
?>