<?php
require('database.php');

if(isset($_POST['ajouter'])){
    if(!empty($_POST['lois'])){
        $lois=htmlspecialchars($_POST['lois']);
        $req=$bdd->prepare('INSERT INTO loisir(nomLoisir,num_c) VALUES(?,?)');
        $req->execute(array($lois,$_SESSION['num_c']));
        header('location:loisirFran.php');
    }
    else{
        $errormssg="Veuillez completer tous les champs";
    }
}




if(isset($_POST['suivant'])){
    if(!empty($_POST['lois'])){
        $lois=htmlspecialchars($_POST['lois']);
        $req=$bdd->prepare('INSERT INTO loisir(nomLoisir,num_c) VALUES(?,?)');
        $req->execute(array($lois,$_SESSION['num_c']));
        header('location:infoPerso.php');
    }
    else{
        $errormssg="Veuillez completer tous les champs";
    }
}


?>