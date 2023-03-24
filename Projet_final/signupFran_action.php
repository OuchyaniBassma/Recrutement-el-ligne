<?php
require('database.php');
if(isset($_POST['inscrire'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['age'])
    AND !empty($_POST['cin']) AND !empty($_POST['dn']) AND !empty($_POST['ville'])
    AND !empty($_POST['tel']) AND !empty($_POST['email']) AND !empty($_POST['password']) 
   AND !empty($_POST['categorie']) ){
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $age=htmlspecialchars($_POST['age']);
        $cin=htmlspecialchars($_POST['cin']);
        $dn=htmlspecialchars($_POST['dn']);
        $ville=htmlspecialchars($_POST['ville']);
        $tel=htmlspecialchars($_POST['tel']);
        $email=htmlspecialchars($_POST['email']);
        //$passwordpassword_hash($_POST['password],PASSWORD_DEFAULT)

        $password=htmlspecialchars($_POST['password']);
        $categorie=htmlspecialchars($_POST['categorie']);

        $chercher=$bdd->prepare('SELECT *FROM users WHERE email=?');
        $chercher->execute(array($email));
        $result=$chercher->fetch();

        if($chercher->rowcount()>0){
            $errormssg="Utilisateur déja éxist !";}
            
        else{
            $inserer=$bdd->prepare('INSERT INTO users(email,password) VALUES(?,?)');
            $inserer->execute(array($email,$password));

            $trouverid=$bdd->prepare('SELECT * FROM users WHERE email=?');
            $trouverid->execute(array($email));
            $result=$trouverid->fetch();

            if($categorie=="recruteur"){
                $inserer=$bdd->prepare('INSERT INTO recruteur(nom,prenom,CIN,age,dateNaissance,ville,tel,email,password,id) VALUES(?,?,?,?,?,?,?,?,?,?)');
                $inserer->execute(array($nom,$prenom,$cin,$age,$dn,$ville,$tel,$email,$password,$result['id']));

                $chercher=$bdd->prepare('SELECT *FROM recruteur WHERE email=?');
                $chercher->execute(array($email));
                $result=$chercher->fetch();


                $_SESSION['num']=$result['num_r'];
                $_SESSION['nom']=$result['nom'];
            $_SESSION['prenom']=$result['prenom'];
            $_SESSION['cin']=$result['CIN'];
            $_SESSION['age']=$result['age'];
            $_SESSION['dn']=$result['dateNaissance'];
            $_SESSION['ville']=$result['ville'];
            $_SESSION['tel']=$result['tel'];
            $_SESSION['email']=$result['email'];
            $_SESSION['password']=$result['password'];
            $_SESSION['id']=$result['id'];
            header('location:infoperso.php');

            }
            if($categorie=="candidat"){
                $inserer=$bdd->prepare('INSERT INTO candidat (nom,prenom,CIN,age,dateNaissance,ville,tel,email,password,id) VALUES(?,?,?,?,?,?,?,?,?,?)');
                $inserer->execute(array($nom,$prenom,$cin,$age,$dn,$ville,$tel,$email,$password,$result['id']));

                $chercher=$bdd->prepare('SELECT *FROM candidat WHERE email=?');
                $chercher->execute(array($email));
                $result=$chercher->fetch();
                $_SESSION['num_c']=$result['num_c'];
            $_SESSION['nom']=$result['nom'];
            $_SESSION['prenom']=$result['prenom'];
            $_SESSION['cin']=$result['CIN'];
            $_SESSION['age']=$result['age'];
            $_SESSION['dn']=$result['dateNaissance'];
            $_SESSION['ville']=$result['ville'];
            $_SESSION['tel']=$result['tel'];
            $_SESSION['email']=$result['email'];
            $_SESSION['password']=$result['password'];
            $_SESSION['id']=$result['id'];

            header('location:formationFran.php');
            }


           


        }












    }else{
        $errormssg="Merci de compléter tous les champs !";
    }
}






?>