<?php
require('database.php');

if(isset($_POST['ajouter'])){
    if(!empty($_POST['poste']) AND $_POST['nomEntreprise'] AND !empty($_POST['dateDebut']) AND 
    !empty($_POST['dateFin'])){
        $poste=htmlspecialchars($_POST['poste']);
        $nomEntreprise=htmlspecialchars($_POST['nomEntreprise']);
        $req=$bdd->prepare('INSERT INTO experience(poste,nomEntreprise,dateDebut,dateFin,num_c) VALUES(?,?,?,?,?)');
        $req->execute(array($poste,$nomEntreprise,$_POST['dateDebut'],$_POST['dateFin'],$_SESSION['num_c']));
        header('location:experienceFran.php');
    }
    else{
        $errormssg="Veuillez completer tous les champs";
    }
}
if(isset($_POST['suivant'])){
    if(!empty($_POST['poste']) AND $_POST['nomEntreprise'] AND !empty($_POST['dateDebut']) AND 
    !empty($_POST['dateFin'])){
        $poste=htmlspecialchars($_POST['poste']);
        $nomEntreprise=htmlspecialchars($_POST['nomEntreprise']);
        $req=$bdd->prepare('INSERT INTO experience(poste,nomEntreprise,dateDebut,dateFin,num_c) VALUES(?,?,?,?,?)');
        $req->execute(array($poste,$nomEntreprise,$_POST['dateDebut'],$_POST['dateFin'],$_SESSION['num_c']));
        header('location:competencefran.php');
    }
    else{
        $errormssg="Veuillez completer tous les champs";
    }
}









?>