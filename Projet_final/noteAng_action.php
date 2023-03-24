<?php
require('database.php');
if(isset($_POST['enregistrer'])){
    if(!empty($_POST['note'])){

        $d=htmlspecialchars(date( "d/m/Y H:i:s"));

        $req=$bdd->prepare('INSERT INTO note(note,dateNote,id) VALUES(?,?,?)');
        $req->execute(array($_POST['note'],$d,$_SESSION['id']));
        echo "The note has been saved successfully";
    
}else{
    $errormssg="Please fill in the Note field ";
}
}



?>