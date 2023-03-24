<?php
require('database.php');
if(isset($_POST['envoyer'])){
    
    if(!empty($_POST['email_destinataire']) AND !empty($_POST['message'])){
        // pour verifier si le destinataire exist ou pas
        $req=$bdd->prepare('SELECT * FROM users WHERE email=?');
        $req->execute(array($_POST['email_destinataire']));
        if($req->rowcount()==0){
            $errormssg="The email address you entered does not exist!";       
        }else{
            $d=htmlspecialchars(date( "d/m/Y H:i:s"));
        $req=$bdd->prepare('INSERT INTO messages(message,email_auteur,email_destinataire,dateEnvoie) VALUES(?,?,?,?)');
        $req->execute(array($_POST['message'],$_SESSION['email'],$_POST['email_destinataire'],$d));
        echo "The message was sent successfully";}
    
}else{
    $errormssg="Please fill in all the blanks";
}

}

?>