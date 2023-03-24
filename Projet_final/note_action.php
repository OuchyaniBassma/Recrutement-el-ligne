<?php
require('database.php');
if(isset($_POST['enregistrer'])){
    if(!empty($_POST['note'])){

        $d=htmlspecialchars(date( "d/m/Y H:i:s"));

        $req=$bdd->prepare('INSERT INTO note(note,dateNote,id) VALUES(?,?,?)');
        $req->execute(array($_POST['note'],$d,$_SESSION['id']));
        echo "La note a été enregistré avec succès";
    
}else{
    $errormssg="Merci de remplir le champs Note ";
}
}



?>