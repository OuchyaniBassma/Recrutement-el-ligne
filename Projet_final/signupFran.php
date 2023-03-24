
<!DOCTYPE html>
<html lang="en">
<?php require('head.php');?>
<?php require('signupFran_action.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"">
<link rel="stylesheet" href="login.css">


<body>
<div class="div1">
    <div>
        <p><strong>Veuillez remplir le formulaire ci-dessous</strong></p>
    </div> <!--fin div1-->

    <div class="form2"> <!--comme,cer div form-->




    <form method="POST" action="">
        <table>
        <div class="error">
<?php
        if(isset($errormssg)){
            echo $errormssg ;}
            ?></div>

<div class="row">
  <div class="col">
    <input name="nom" type="text" class="form-control" placeholder="Nom" aria-label="nom">
  </div>
  <div class="col">
    <input name="prenom" type="text" class="form-control" placeholder="Prénom" aria-label="prenom">
  </div>
</div>
<div><br></div>
<div class="row">
  <div class="col">
    <input name="age" type="number" class="form-control" placeholder="Age" aria-label="age">
  </div>
  <div class="col">
    <input name="cin" type="text" class="form-control" placeholder="CIN" aria-label="cin">
  </div>
</div>
<div><br></div>

<div class="row">
  <div class="col">
    <input name="ville" type="text" class="form-control" placeholder="Ville" aria-label="ville">
  </div>
  <div class="col">
    <input name="tel" type="number" class="form-control" placeholder="Téléphone" aria-label="tel">
  </div>

</div>
<div><br></div>
<div class="row">
  <div class="col">
    <input name="email" type="email" class="form-control" placeholder="Email" aria-label="email">
  </div>
  <div class="col">
    <input name="password" type="password" class="form-control" placeholder="Mot de passe" aria-label="password">
  </div>
</div>
<div><br></div>
<div class="row">
<div class="col">
<p><strong>Date de naissance:</strong>
    <input name="dn" type="date" class="form-control" placeholder="Date de naissance" aria-label="date">
  </div>
  <div class="col">
    <br>
    <p><strong>Vous êtes  un   :</strong>
    <input name="categorie" type="radio" value="recruteur">Recruteur
    <input name="categorie" type="radio" value="candidat">Candidat</p>
  </div>
  
</div>







<div class="d-grid gap-2 col-6 mx-auto">
  <input class="btn btn-primary" type="submit" name="inscrire" value="Inscrire">
        </div>
        <br>
<div align="center"><strong>Vous avez déja un compte ?</strong> ,<a href="loginFran.php">Connectez-vous </a><strong> ici !</strong></div>
<div class="suiv">










    </form>
        </div> <!--terminer div form-->
    </div>

</body>
</html>