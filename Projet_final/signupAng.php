
<!DOCTYPE html>
<html lang="en">
<?php require('head.php');?>
<?php require('signupAng_action.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"">
<link rel="stylesheet" href="login.css">

<body>
<div class="div1">
    <div>
        <p><strong>please fill out the form below :</strong></p>
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
    <input name="nom" type="text" class="form-control" placeholder="First name" aria-label="nom">
  </div>
  <div class="col">
    <input name="prenom" type="text" class="form-control" placeholder="Last name" aria-label="prenom">
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
    <input name="ville" type="text" class="form-control" placeholder="City" aria-label="ville">
  </div>
  <div class="col">
    <input name="tel" type="number" class="form-control" placeholder="Phone" aria-label="tel">
  </div>

</div>
<div><br></div>
<div class="row">
  <div class="col">
    <input name="email" type="email" class="form-control" placeholder="E-mail address" aria-label="email">
  </div>
  <div class="col">
    <input name="password" type="password" class="form-control" placeholder="Password" aria-label="password">
  </div>
</div>
<div><br></div>
<div class="row">
<div class="col">
<p><strong>Date of birth:</strong>
    <input name="dn" type="date" class="form-control" placeholder="Date of birth" aria-label="date">
  </div>
  <div class="col">
    <br>
    <p><strong>You are a   :</strong>
    <input name="categorie" type="radio" value="recruteur">Recruiter
    <input name="categorie" type="radio" value="candidat">Candidate</p>
  </div>
  
</div>







<div class="d-grid gap-2 col-6 mx-auto">
  <input class="btn btn-primary" type="submit" name="inscrire" value="Inscription">
        </div>
        <br>
<div align="center"><strong>Already have an account ?</strong> ,<a href="loginAng.php">Log in</a><strong> here !</strong></div>
<div class="suiv">









    </form>
        </div> <!--terminer div form-->
    </div>

</body>
</html>