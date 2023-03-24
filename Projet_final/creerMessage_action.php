<?php
require('database.php');
if(isset($_POST['envoyer'])){
    
    if(!empty($_POST['email_destinataire']) AND !empty($_POST['message'])){
        // pour verifier si le destinataire exist ou pas
        $req=$bdd->prepare('SELECT * FROM users WHERE email=?');
        $req->execute(array($_POST['email_destinataire']));
        if($req->rowcount()==0){
            $errormssg="L'adresse e-mail que vous avez saisi n'éxiste pas !";       
        }else{
            $d=htmlspecialchars(date( "d/m/Y H:i:s"));
        $req=$bdd->prepare('INSERT INTO messages(message,email_auteur,email_destinataire,dateEnvoie) VALUES(?,?,?,?)');
        $req->execute(array($_POST['message'],$_SESSION['email'],$_POST['email_destinataire'],$d));
        echo "Le message a été envoyé avec succès";}
    
}else{
    $errormssg="Merci de remplir tous les champs";
}

}

?>