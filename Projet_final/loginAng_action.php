<?php
require('database.php');

if(isset($_POST['entrer'])){
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        $email=htmlspecialchars($_POST['email']);
                //$passwordpassword_hash($_POST['password],PASSWORD_DEFAULT)

        $password=htmlspecialchars($_POST['password']);
        $chercher=$bdd->prepare('SELECT *FROM users WHERE email=?');
        $chercher->execute(array($email));
        $result=$chercher->fetch();
       
        if($chercher->rowcount()==0){
            $errormssg="User not exist !";}
            
        else{
            if($password!=$result['password']){
                $errormssg="User not exist !";
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


                    
                header('location:pageCandidatAng.php');}

                

                else {
                    $_SESSION['num_r']=$result['num_r'];
                    $_SESSION['nom']=$result['nom'];
                    $_SESSION['prenom']=$result['prenom'];
                    $_SESSION['tel']=$result['tel'];
                    $_SESSION['email']=$result['email'];
                header('location:pageRecruteurAng.php');            }
                
            }      

        }

    }else{
        $errormssg=" please complete all fields !";
    }

}
if(isset($_POST['change'])){
    header('location:loginFran.php');}



?>