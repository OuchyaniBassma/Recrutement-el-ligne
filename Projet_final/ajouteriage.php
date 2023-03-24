<?php
if(isset($_POST["valider"])){
    include("database.php");
    $req=$bdd->prepare("insert into images(nomImg , tailleImg , typeImg ,binImg,id ) values (?,?,?,?,?)");
    $req->execute(array($_FILES["image"]["name"],$_FILES["image"]["size"],$_FILES["image"]["type"],file_get_contents($_FILES["image"]["tmp_name"]),20));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ajouter img </title>
        <meta charset="utf-8">
        <link rel="Stylesheet" href="Form1.css">
    </head>
    <body>
        <form name="fo" method="POST" action="" enctype="multipart/form-data">
            <input type="file" name="image"/><br/><br/>
            <input type="submit" name="valider" value="charger"/>
        </form>
    </body>
</html>