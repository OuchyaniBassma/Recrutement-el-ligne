<!DOCTYPE html>
  <html lang="en">
  <?php require('head.php'); ?>
  <!--?php require('securite_action.php');?-->
  <?php require('experience_action.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">

  <body>
    <div class="div1">
      <div>
        <p><strong>Champs Expériences  </strong></p>
      </div> <!--fin div1-->
      <div class="form2"> <!--comme,cer div form-->
        <form method="POST" action="">
          <table>
            <div class="error">
              <?php
                if(isset($errormssg)){
                echo $errormssg ;}
              ?>
            </div>
            <div class="row">
              <div class="col">
                <input  class="form-control" type="text" name="poste" placeholder="Poste: " aria-label="poste">
              </div>
              <div><br></div>
              <div class="col">
                <input  class="form-control" type="text" name="nomEntreprise" placeholder="Nom de l'entreprise:" aria-label="nomEntreprise">
              </div>
              <div><br></div>
              <div class="col"><strong>Date début:</strong>
                <input class="form-control" type="date" name="dateDebut" placeholder="Date de début: " aria-label="dateDebut">
              </div>
              <div><br></div>
              <div class="col"><strong>Date fin:</strong>
                <input class="form-control" type="date" name="dateFin" placeholder="Date de fin: " aria-label="dateFin">
              </div>
            </div>
            <div><br></div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter">
            </div><br><br>
            
            <div class="d-grid gap-2 col-6 mx-auto">
              <input class="btn btn-primary" type="submit" name="suivant" value="Suivant">
            </div>
           
        </form>
      </div>
    </div>
  </body>
</html>