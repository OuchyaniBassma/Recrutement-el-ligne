<?php
require('database.php');?>
<!DOCTYPE html>
<html lang="en">
<?php require('head.php'); ?>
<link rel="stylesheet" href="pageAcceuil.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"">


<body>
<?php
$req=$bdd->prepare('SELECT * FROM annonce');
$req->execute();
if($req->rowcount()==0){
    echo "table annonce vide";
}else{
    $i=0;
echo '<table><tr>';
    while($result=$req->fetch()){
        $i++;
        echo '<td>';
    $req2=$bdd->prepare('SELECT * FROM candidat WHERE num_c=?');
    $req2->execute(array($result['num_c']));
    $result2=$req2->fetch();
    echo '<div class="card" style="width: 18rem;">';
   echo '<img src="photo.htm" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$result2['nom'].'//'.$result2['prenom'].'</h5>';
    echo '<p class="card-text">'.$result['descriptionAnnonce'].'</p>';
    echo '<h5 class="card-title">'.$result['datePub'].'</h5>';
    echo '<a href="#" class="btn btn-primary stretched-link">Entrer</a>';
    echo '</div>';
    echo'</div>';
    echo '</td>';
    if($i==4) echo '</tr>';
}
         }
?>
</body>
</html>





