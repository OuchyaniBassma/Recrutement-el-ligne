<!DOCTYPE html>
<html lang="en">
<?php require('head.php');?>
<?php require('pageRecruteurAng_action.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"">
<link rel="stylesheet" href="login.css">

<body>
<div class="div1">
    <div>
        <p><strong> please complete the form</strong></p>
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
    <input name="diplome" type="text" class="form-control" placeholder="Diploma" aria-label="diplome">
  </div>
  <div class="col">
    <input name="experience" type="text" class="form-control" placeholder="Experience" aria-label="experience">
  </div>
</div>
<div><br></div>
<div class="row">
  <div class="col">
    <input name="competence" type="number" class="form-control" placeholder="Skill" aria-label="competence">
  </div>
  <div class="col">
    <input name="langage" type="text" class="form-control" placeholder="Language" aria-label="langage">
  </div>
</div>
<div><br></div>
 <div class="d-grid gap-2 col-6 mx-auto">
  <input class="btn btn-primary" type="submit" name="trouver" value="Find">
        </div>
        <br>
<div align="center">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg><a href="pageRecruteurAng.php"> Back</a> </div>
       </form>
        </div> <!--terminer div form-->
    </div>

</body>
</html>