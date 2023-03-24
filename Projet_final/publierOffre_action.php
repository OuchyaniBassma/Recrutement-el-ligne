<?php
require('database.php');

if(isset($_POST['publier'])){
    if(!empty($_POST['poste']) AND !empty($_POST['nomEntre'])  AND !empty($_POST['villeEntre'])  
     AND !empty($_POST['niveau'])  AND !empty($_POST['domaine'])  
    AND !empty($_POST['contrat']) AND !empty($_POST['description'])){
        $poste=htmlspecialchars($_POST['poste']);
        $nomEntre=htmlspecialchars($_POST['nomEntre']);
        $villeEntre=htmlspecialchars($_POST['villeEntre']);
        $niveau=htmlspecialchars($_POST['niveau']);
        $domaine=htmlspecialchars($_POST['domaine']);
        $contrat=htmlspecialchars($_POST['contrat']);
        $description=htmlspecialchars($_POST['description']);
        $num_r=$_SESSION['num_r'];
        $nom=$_SESSION['nom'];
        $prenom=$_SESSION['prenom'];
        $tel=$_SESSION['tel'];
        $email=$_SESSION['email'];

        $datePub=htmlspecialchars(date( "d/m/Y H:i:s"));

            $req=$bdd->prepare('INSERT INTO offre(poste,nomEntreOffre,villeEntreOffre,datePub,niveauOffre,
            domaineOffre,contrat,description,telOffre,emailOffre,num_r)VALUES(?,?,?,?,?,?,?,?,?,?,?)');
            $req->execute(array($poste,$nomEntre,$villeEntre,$datePub,$niveau,$domaine,$contrat,$description,$tel,$email,$num_r));
            echo "L offre à été publiée ";     

            $req2=$bdd->prepare('INSERT INTO publication(type_publication,id)VALUES(?,?)');
            $req2->execute(array("Offre",$_SESSION['id']));
            
            $_SESSION['poste']=$poste;   
            $_SESSION['nomEntreOffre']=$nomEntre;   
            $_SESSION['villeEntreOffre']=$villeEntre;   
            $_SESSION['datePub']=$datePub; 
            $_SESSION['niveauOffre']=$niveau;   
            $_SESSION['domaineOffre']=$domaine;  
            $_SESSION['contrat']=$contrat;  
            $_SESSION['description']=$description;   


    
    }else{
        $errormssg="Merci de remplir tous les champs !";
    }
}







?>