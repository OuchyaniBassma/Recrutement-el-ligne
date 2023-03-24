<?php
require('database.php');

if(isset($_POST['ajouter'])){
    if(!empty($_POST['lang']) AND !empty($_POST['niv'])){
        $lang=htmlspecialchars($_POST['lang']);
        $niv=htmlspecialchars($_POST['niv']);
        $req=$bdd->prepare('INSERT INTO langage(langue,niveau,num_c) VALUES(?,?,?)');
        $req->execute(array($lang,$niv,$_SESSION['num_c']));
        header('location:languageFran.php');
    }
    else{
        $errormssg="Veuillez completer tous les champs";
    }
}

if(isset($_POST['suivant'])){
    if(!empty($_POST['lang']) AND !empty($_POST['niv'])){
        $lang=htmlspecialchars($_POST['lang']);
        $niv=htmlspecialchars($_POST['niv']);
        $req=$bdd->prepare('INSERT INTO langage(langue,niveau,num_c) VALUES(?,?,?)');
        $req->execute(array($lang,$niv,$_SESSION['num_c']));
        header('location:loisirFran.php');
    }
    else{
        $errormssg="Veuillez completer tous les champs";
    }
}





