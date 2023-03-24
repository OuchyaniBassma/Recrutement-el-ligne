<?php
require('database.php');

if(isset($_POST['entrer'])){
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        //$passwordpassword_hash($_POST['password],PASSWORD_DEFAULT)
        $email=htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);
        $chercher=$bdd->prepare('SELECT *FROM users WHERE email=?');
        $chercher->execute(array($email));
        $result=$chercher->fetch();
       
        if($chercher->rowcount()==0){
            $errormssg="Utilisateur n'éxiste pas !";}
            
        else{
            if($password!=$result['password']){
                $errormssg="Utilisateur n'éxiste pas !";
            }      
            else{
                 
                $_SESSION['id']=$result['id'];
                $_SESSION['email']=$result['email'];
                $_SESSION['password']=$result['password'];
                
                //il faut parcourir les deux tables pour savoir si cet utiisateur 
                //exist dans quelles table pour savoir le rediriger vers pa page propre a lui


                $chercher=$bdd->prepare('SELECT *FROM recruteur WHERE id=?');
                $chercher->execute(array($_SESSION['id']));
                $result=$chercher->fetch();

                if($chercher->rowcount()==0){


                $chercher=$bdd->prepare('SELECT *FROM candidat WHERE id=?');
                $chercher->execute(array($_SESSION['id']));
                $result=$chercher->fetch();

                    $_SESSION['num_c']=$result['num_c'];
                    $_SESSION['nom']=$result['nom'];
                    $_SESSION['prenom']=$result['prenom'];
                    $_SESSION['CIN']=$result['CIN'];
                    $_SESSION['age']=$result['age'];
                    $_SESSION['dateNaissance']=$result['dateNaissance'];
                    $_SESSION['ville']=$result['ville'];
                    $_SESSION['tel']=$result['tel'];
                    $_SESSION['email']=$result['email'];


                    
                header('location:pageCandidatFran.php');}

                

                else {
                    $_SESSION['num_r']=$result['num_r'];
                    $_SESSION['nom']=$result['nom'];
                    $_SESSION['prenom']=$result['prenom'];
                    $_SESSION['tel']=$result['tel'];
                    $_SESSION['email']=$result['email'];
                    $_SESSION['dn']=$result['dateNaissance'];
                    $_SESSION['ville']=$result['ville'];

                    $chercher=$bdd->prepare('SELECT *FROM inforecruteur WHERE num_r=?');
                    $chercher->execute(array($_SESSION['num_r']));
                    $result=$chercher->fetch();
                    $_SESSION['profession']=$result['profession'];
                    $_SESSION['linkedin']=$result['linkedin'];
                    $_SESSION['facebook']=$result['facebook'];
                    $_SESSION['instagram']=$result['instagram'];
                    $_SESSION['twitter']=$result['twitter'];
                    $_SESSION['descriptionProfil']=$result['descriptionProfil'];



                    
                header('location:pageRecruteurFran.php');            }
                
            }      

        }

    }else{
        $errormssg="Merci de remplir tous les champs !";
    }

}
if(isset($_POST['changer'])){
    header('location:loginAng.php');
}


?>