<?php
require('database.php');

if(isset($_POST['ajouter'])){
    if(!empty($_POST['diplome']) AND $_POST['etablissement'] AND $_POST['villeEtablissement']
    AND $_POST['dateDebut'] AND $_POST['dateFin'] AND $_POST['mention']){
        $diplome=htmlspecialchars($_POST['diplome']);
        $etablissement=htmlspecialchars($_POST['etablissement']);
        $villeEtablissement=htmlspecialchars($_POST['villeEtablissement']);
        $mention=htmlspecialchars($_POST['mention']);
        $req=$bdd->prepare('INSERT INTO formation(diplome,etablissement,villeEtablissement,dateDebut,dateFin,mention,num_c) VALUES(?,?,?,?,?,?,?)');
        $req->execute(array($diplome,$etablissement,$villeEtablissement,$_POST['dateDebut'],$_POST['dateFin'],$mention,$_SESSION['num_c']));
        header('location:formationFran.php');
    }else{
        $errormssg="Veuillez completer tous les champs";
    }
}

if(isset($_POST['suivant'])){
    if(!empty($_POST['diplome']) AND $_POST['etablissement'] AND $_POST['villeEtablissement']
    AND $_POST['dateDebut'] AND $_POST['dateFin'] AND $_POST['mention']){
        $diplome=htmlspecialchars($_POST['diplome']);
        $etablissement=htmlspecialchars($_POST['etablissement']);
        $villeEtablissement=htmlspecialchars($_POST['villeEtablissement']);
        $mention=htmlspecialchars($_POST['mention']);
        $req=$bdd->prepare('INSERT INTO formation(diplome,etablissement,villeEtablissement,dateDebut,dateFin,mention,num_c) VALUES(?,?,?,?,?,?,?)');
        $req->execute(array($diplome,$etablissement,$villeEtablissement,$_POST['dateDebut'],$_POST['dateFin'],$mention,$_SESSION['num_c']));
        header('location:experienceFran.php');
    }else{
        $errormssg="Veuillez completer tous les champs";
    }
}

   

?>