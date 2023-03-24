<!DOCTYPE html>
<html lang="en">
<?php require('head.php');?>
<?php require('pageRecruteurFran_action.php'); ?>
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
    <input name="diplome" type="text" class="form-control" placeholder="Diplome" aria-label="diplome">
  </div>
  <div class="col">
    <input name="experience" type="text" class="form-control" placeholder="Experience" aria-label="experience">
  </div>
</div>
<div><br></div>
<div class="row">
  <div class="col">
    <input name="competence" type="text" class="form-control" placeholder="Competence" aria-label="competence">
  </div>
  <div class="col">
    <input name="langage" type="text" class="form-control" placeholder="Langage" aria-label="langage">
  </div>
</div>
<div><br></div>
 <div class="d-grid gap-2 col-6 mx-auto">
  <input class="btn btn-primary" type="submit" name="trouver" value="Trouver">
        </div>
        <br>
<div align="center"><a href="pageRecruteurFran.php"> Retour</a> </div>
       </form>
        </div> <!--terminer div form-->
    </div>

</body>
</html>