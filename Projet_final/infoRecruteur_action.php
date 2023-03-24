<?php
require('database.php');
if(isset($_POST['terminer'])){
        
        if(empty($_POST['linkedin'])) $linkedin="null";
        else $linkedin=$_POST['linkedin'];

        if(empty($_POST['facebook'])) $facebook="null";
        else $facebook=$_POST['facebook'];

        if(empty($_POST['instagram'])) $instagram="null";
        else $instagram=$_POST['instagram'];


        $profession=htmlspecialchars($_POST['profession']);

        if(empty($_POST['comp'])) $comp="null";
        else $comp=$_POST['comp'];

        if(empty($_POST['loisir'])) $loisir="null";
        else $loisir=$_POST['loisir'];

        if(empty($_POST['activite'])) $activite="null";
        else $activite=$_POST['activite'];

        if(empty($_POST['nbrProjet'])) $nbrProjet="null";
        else $nbrProjet=$_POST['nbrProjet'];

        $inserer=$bdd->prepare('INSERT INTO inforecruteur(profession,linkedin,facebook,instagram,descriptionP,nbrProjet,loisir,comp,activite,num_r) VALUES(?,?,?,?,?,?,?,?,?,?)');
            $inserer->execute(array($_POST['profession'],$linkedin,$facebook,$instagram,$_POST['descriptionP'],$nbrProjet,$loisir,$comp,$activite,$_SESSION['num_r']));

            $trouverid=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
            $trouverid->execute(array($_SESSION['num_r']));
            $result=$trouverid->fetch();
            $_SESSION['profession']=$profession;
            $_SESSION['linkedin']=$result['linkedin'];
            $_SESSION['facebook']=$result['facebook'];
            $_SESSION['instagram']=$result['instagram'];
            $_SESSION['descriptionP']=$result['descriptionP'];
}









?>