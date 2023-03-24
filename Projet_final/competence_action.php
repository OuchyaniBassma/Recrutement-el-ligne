<?php
require('database.php');

if(isset($_POST['ajouter'])){
    if(!empty($_POST['comp']) AND $_POST['desc']){
        $comp=htmlspecialchars($_POST['comp']);
        $desc=htmlspecialchars($_POST['desc']);
        $req=$bdd->prepare('INSERT INTO competence(nomCompetence,descriptionComp,num_c) VALUES(?,?,?)');
        $req->execute(array($comp,$desc,$_SESSION['num_c']));

       
        header('location:competenceFran.php');
    }
    else{
        $errormssg="Veuillez completer tous les champs";
    }

}

if(isset($_POST['suivant'])){
    if(!empty($_POST['comp']) AND $_POST['desc']){
        $comp=htmlspecialchars($_POST['comp']);
        $desc=htmlspecialchars($_POST['desc']);
        $req=$bdd->prepare('INSERT INTO competence(nomCompetence,descriptionComp,num_c) VALUES(?,?,?)');
        $req->execute(array($comp,$desc,$_SESSION['num_c']));

        
        header('location:languagefran.php');
    }
    else{
        $errormssg="Veuillez completer tous les champs";
    }

}

?>



