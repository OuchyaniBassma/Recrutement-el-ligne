<?php
try{
    session_start();
    $bdd=new PDO('mysql:host=localhost;dbname=recrutement_mon_travail;charset=utf8','root','bassma');
    if($bdd){
    echo "Connected to the database successfuly<br>";}

}
catch(PDOException $e){
    $errormssg=$e->getMessage();
    echo $errormssg;
    exit();
}


?>
