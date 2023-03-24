<?php

require('database.php');


if(isset($_POST['deconnexion'])){
    require('logoutFran.php');
}

if(isset($_POST['boitemssg'])){
    header('location:messagesCandidat.php');
}

if(isset($_POST['publierRecherche'])){
    header('location:publierRecherche.php');
} 
if(isset($_POST['creermssg'])){
    header('location:creerMessageCandidat.php');
}
if(isset($_POST['mesRecherches'])){
    header('location:mesRecherches.php');
}
if(isset($_POST['mssgenvoyer'])){
    header('location:messageEnvoyerCandidat.php');
}
if(isset($_POST['note'])){
    header('location:noteCandidat.php');
}
if(isset($_POST['mesNotes'])){
    header('location:mesNotesCandidat.php');
}

if(isset($_POST['profil'])){
    header('location:profileCandidat.php');
}
if(isset($_POST['cv'])){
    header('location:CV.php');
}


if(isset($_POST['btn-chercher'])){
    if(!empty($_POST['chercher'])){
        $_SESSION['chercher']=trim(htmlspecialchars($_POST['chercher']));
        header('location:pageDeRechercheCandidat.php');
    }}
if(isset($_POST['ajouterImg']))
{
    header('location:infoperso.php');}
?>