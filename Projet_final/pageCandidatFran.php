<!DOCTYPE html>
<html lang="en">
<?php require('head.php'); ?>
<?php require('pageCandidatFran_action.php'); ?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"">
<link rel="stylesheet" href="pageRecruteur.css">

<body>

<div class="div1">
    
    <h1> Recrutement <span> $ En ligne</span></h1>
    
    </div>
<table>
    <tr>
    <td class="cherche">
    <form method="POST" action="">

<div class="input-group rounded">

<input name="chercher" type="search" class="form-control rounded" placeholder="Chercher par nom ou par email " aria-label="Search" aria-describedby="search-addon" />
<button type="submit" name="btn-chercher"><span class="input-group-text border-0" id="search-addon">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
  </span></button>
 
</div>
</form>

    </td>
    <td class="td1">
    <form method="POST" action="">
    
 <?php echo '<p><strong>'.$_SESSION['nom'].'<br>'.$_SESSION['prenom'].'<br>'.'</strong></p>';    ?>

<td class="td2"></td><td class="td3"><button type="submit" name="profil" class="btn btn-primary position-relative">
  Profile
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
</button>

</td></tr></table>
   
 <table>

<tr><td>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg> <input class="in" type="submit" name="creermssg" value="Nouveau message"><br><br>
</td><td>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
  <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
  <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
</svg> <input class="in" type="submit" name="boitemssg" value="boîte de réception"><br><br>
</td><td>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
</svg> <input class="in" type="submit" name="mssgenvoyer" value="Messages envoyés"><br><br>
</td><td>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-down" viewBox="0 0 16 16">
  <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg> <input class="in" type="submit" name="mesRecherches" value="Mes publication"><br><br>

</td><td>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
</svg> <input class="in" type="submit" name="publierRecherche" value="Publier"><br><br>
</td><td>


    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg> <input class="in" type="submit" name="note" value="Ajouter une note"><br><br>
</td><td>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
  <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
</svg><input class="in" type="submit" name="mesNotes" value="Mes notes"><br><br>
</td><td>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
  <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg> <input class="in" type="submit" name="cv" value="Voir CV"><br><br> 
</td><td>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/>
</svg> <input class="in" type="submit" name="deconnexion" value="Deconnexion"><br><br>

</td></tr></table>

<?php    
$req=$bdd->query('SELECT * FROM publication ORDER BY id_p DESC');
$req->execute();
if($req->rowcount()==0){
  echo 'Aucune publication a affiché';

}else{
  while($result=$req->fetch()){
    if($result['type_publication']=="Offre"){

    $req2=$bdd->prepare('SELECT * FROM recruteur WHERE id=?');
$req2->execute(array($result['id']));
$result2=$req2->fetch();

$req3=$bdd->prepare('SELECT * FROM offre WHERE num_r=?');
$req3->execute(array($result2['num_r']));
$result3=$req3->fetch();

$req4=$bdd->prepare('SELECT *FROM images WHERE id=?');
$req4->execute(array($result['id']));
$result4=$req4->fetch();

echo '<div class="offre">';
echo '<p class="titre">Offre</p>';

if($req4->rowcount()>0){
  $v='IMAGE/'.$result4['nameImg'];

echo '<img src="'.$v.'" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '    ';}
else{
echo '<img src="IMAGE/Account-User-PNG-Clipart.png" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '   ';}
echo '<strong class="name">'.$result2['nom'].'  '.$result2['prenom'].'</strong><br>';
echo '<strong><i>Poste   :</i></strong>'.$result3['poste'];echo '<br>';
echo '<strong><i>Nom entreprise   :</i></strong>'.$result3['nomEntreOffre'];echo '<br>';
echo '<strong><i>Ville entreprise   :</i></strong>'.$result3['villeEntreOffre'];echo '<br>';
echo '<strong><i>Date de publication   :</i></strong>'.$result3['datePub'];echo '<br>';
echo '<strong><i>Type de contrat   :</i></strong>'.$result3['contrat'];echo '<br>';
echo '<strong><i>Ville entreprise   :</i></strong>'.$result3['villeEntreOffre'];echo '<br>';
echo '<strong><i>Description     :</i></strong>'.$result3['description'];echo '<br>';
echo '<strong><i>Adresse e-mail   :</i></strong>'.$result2['email'];echo '<br>';


echo '</div>';



}else{
  $req2=$bdd->prepare('SELECT * FROM candidat WHERE id=?');
  $req2->execute(array($result['id']));
  $result2=$req2->fetch();

  $req3=$bdd->prepare('SELECT * FROM annonce WHERE num_c=?');
  $req3->execute(array($result2['num_c']));
  $result3=$req3->fetch();

  
$req4=$bdd->prepare('SELECT *FROM images WHERE id=?');
$req4->execute(array($result['id']));
$result4=$req4->fetch();
  
echo '<div class="offre">';
echo '<p>Recherche d emploi</p>';
if($req4->rowcount()>0){
  $v='IMAGE/'.$result4['nameImg'];

echo '<img src="'.$v.'" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '   ';}
else{
echo '<img src="IMAGE/Account-User-PNG-Clipart.png" alt="Photo" title="Photo" border-radius :50% width="100px" height="40px">';echo '   ';}

  echo '<strong class="name">'.$result2['nom'].'  '.$result2['prenom'].'</strong><br>';
echo '<strong><i>Description     :</i></strong>'.$result3['descriptionAnnonce'];echo '<br>';
echo '<strong><i>Date de publication    :</i></strong>'.$result3['datePub'];echo '<br>';
echo '<strong><i>Adresse e-mail   :</i></strong>'.$result2['email'];echo '<br>';


echo '</div>';;  
}


}}


?>







</body>
</html>