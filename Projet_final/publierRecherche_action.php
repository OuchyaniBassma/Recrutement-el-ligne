<?php
require('database.php');

if(isset($_POST['publier'])){
    if(!empty($_POST['description'])){
        
        $description=htmlspecialchars($_POST['description']);
        $num_c=$_SESSION['num_c'];

        $datePub=htmlspecialchars(date( "d/m/Y H:i:s"));

            $req=$bdd->prepare('INSERT INTO annonce(descriptionAnnonce,datePub,num_c)VALUES(?,?,?)');
            $req->execute(array($description,$datePub,$num_c));
            echo "L annonce à été publiée ";     
            
            $req=$bdd->prepare('INSERT INTO publication(type_publication,id)VALUES(?,?)');
            $req->execute(array("Recherche d'emploi ",$_SESSION['id']));

            $_SESSION['datePub']=$datePub; 
            $_SESSION['description']=$description;   


    
    }else{
        $errormssg="Merci de remplir tous les champs !";
    }
}







?>