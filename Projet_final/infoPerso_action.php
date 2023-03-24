<?php require('database.php');
if(isset($_POST['envoyer'])){

      //nom de l'image
    $name_image=$_FILES['image']['name'];
    //le dossier ou se trouves l'image
$temporaire=$_FILES['image']['tmp_name'];

//extension de l'image
$extens=strrchr($name_image,'.');

//extension autoriser
$autoriser=array('.png','.PNG','.jpg','.JPG','.JPEG','jpeg');

//dossier de destination
$destination='IMAGE/'.$name_image;

if(in_array($extens,$autoriser)){
  move_uploaded_file($temporaire,$destination);
        $addb=$bdd->prepare('INSERT INTO images(nameImg,id) VALUES(?,?)');
        $addb->execute(array($name_image,$_SESSION['id']));


} 

$req=$bdd->prepare('SELECT * FROM candidat WHERE id=?');
$req->execute(array($_SESSION['id']));
if($req->rowcount()>0){
header('location:pageCandidatFran.php');}
else header('location:infoRecruteur.php');
}
if(isset($_POST['passer'])){
  header('location:pageCandidatFran.php');
}

?>


