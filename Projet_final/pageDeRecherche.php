<?php require('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require('head.php'); ?>
<?php require('pageDeRecherche_action.php'); ?>


<link rel="stylesheet" href="pageDeRecherche.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"">
 
<body>

<div class="div1">
    
    <h1> Recrutement <span> $ En ligne</span></h1>
    
    </div>
    <br><br>

    
</form>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
<a href="pageRecruteurFran.php">Retour</a>

<br><br><br>
    <form method="POST" action="">
<?php
$chaine=$_SESSION['chercher'];
if(strpos($chaine,'@gmail.com')){
    //le recruteur a chercher par email
$req=$bdd->prepare('SELECT * FROM candidat WHERE email=?');
$req->execute(array($chaine));
// aucun resulat
if($req->rowcount()==0){
    echo "Aucun résultat";
}
//resultat exist
else{
    //afficher le resultat,deja il exist un seul candidat comme resultat(email est unique)
   $result=$req->fetch();
   $req4=$bdd->prepare('SELECT *FROM images WHERE id=?');
   $req4->execute(array($result['id']));
   $result4=$req4->fetch();

     echo '<div class="recherche">';

     if($req4->rowcount()>0){
       $v='IMAGE/'.$result4['nameImg'];
     
     echo '<img src="'.$v.'" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '    ';}
     else{
     echo '<img src="IMAGE/Account-User-PNG-Clipart.png" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '   ';}
     

   echo '<strong>'.$result['nom'].'  '.$result['prenom'].'</strong><br>';
   echo '<input type="submit" name="mssg" value="Envoyer message">';
   echo '</div>';
}
exit();


}


//recruteur a chercher par nom
else{

$nomcomplet=explode(" ",$chaine);
//premier mot
//s'il exist un deuxieme mot
if(isset($nomcomplet[1])){
    //nom prenom non contraire
    $req=$bdd->prepare('SELECT * FROM candidat WHERE nom=? AND prenom=?');
$req->execute(array($nomcomplet[0],$nomcomplet[1]));
//resultat trouvé
if($req->rowcount()>0){
    while($result=$req->fetch()){
      
      $req4=$bdd->prepare('SELECT *FROM images WHERE id=?');
      $req4->execute(array($result['id']));
      $result4=$req4->fetch();

        echo '<div class="recherche">';

        if($req4->rowcount()>0){
          $v='IMAGE/'.$result4['nameImg'];
        
        echo '<img src="'.$v.'" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '    ';}
        else{
        echo '<img src="IMAGE/Account-User-PNG-Clipart.png" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '   ';}
        


    echo '<img src="img.html" alt="Photo" title="Photo" width="80px" height="100px">';
    echo '<strong>'.$result['nom'].'  '.$result['prenom'].'</strong><br>';
    echo '<input type="submit" name="mssg" value="Envoyer message">';
    echo '<br>';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
  </svg>';echo ' :';echo $result['email'];
    echo '</div>';;  
 }
  }
    //si result n'exist pas
//nom et prenom contraire

$req=$bdd->prepare('SELECT * FROM candidat WHERE nom=? AND prenom=?');
$req->execute(array($nomcomplet[1],$nomcomplet[0]));
//resultat trouvé
if($req->rowcount()>0){
   while($result=$req->fetch()){


    $req4=$bdd->prepare('SELECT *FROM images WHERE id=?');
    $req4->execute(array($result['id']));
    $result4=$req4->fetch();

      echo '<div class="recherche">';

      if($req4->rowcount()>0){
        $v='IMAGE/'.$result4['nameImg'];
      
      echo '<img src="'.$v.'" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '    ';}
      else{
      echo '<img src="IMAGE/Account-User-PNG-Clipart.png" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '   ';}
      

    echo '<strong>'.$result['nom'].'  '.$result['prenom'].'</strong><br>';
    echo '<input type="submit" name="mssg" value="Envoyer message">';
    echo '<br>';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
  </svg>';echo ' :';echo $result['email'];
    echo '</div>';}
   }
    //si result n'exist pas



}
//s'il exist juste un seul mot
$req=$bdd->prepare('SELECT * FROM candidat WHERE nom=? OR prenom=?');
$req->execute(array($chaine,$chaine));
$resultt=$req->fetch();
//si resultat exist
if($req->rowcount()>0){
 while($result=$req->fetch()){
  $req4=$bdd->prepare('SELECT *FROM images WHERE id=?');
  $req4->execute(array($result['id']));
  $result4=$req4->fetch();

    echo '<div class="recherche">';

    if($req4->rowcount()>0){
      $v='IMAGE/'.$result4['nameImg'];
    
    echo '<img src="'.$v.'" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '    ';}
    else{
    echo '<img src="IMAGE/Account-User-PNG-Clipart.png" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '   ';}
    

    echo '<strong>'.$result['nom'].'  '.$result['prenom'].'</strong><br>';
    echo '<input type="submit" name="mssg" value="Envoyer message">';
    echo '<br>';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
  </svg>';echo ' :';echo $result['email'];
  echo '<br>';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
    <path fill-rule="evenodd" d="M12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z"/>
   </svg> ';echo ' :';echo $resultt['tel'];
    echo '</div>';}
}
//si result n'exist pas


}









?>




</body>
</html>



