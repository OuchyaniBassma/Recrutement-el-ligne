<!DOCTYPE html>
  <html lang="en">
  <?php require('head.php'); ?>
  <?php require('formation_action.php'); ?>
  <?php /*require('securite_action.php'); */?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">

  <body>
    <div class="div1">
      <div>
        <p><strong>Champs Formation  </strong></p>
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
                <input  class="form-control" type="text" name="diplome" placeholder="Diplome : " aria-label="diplome">
              </div>
              <div><br></div>
              <div class="col">
                <input class="form-control" type="text" name="etablissement" placeholder="Etablissement:" aria-label="etablissement">
              </div>
              <div><br></div>
              <div class="col"> 
                <input class="form-control" type="text" name="villeEtablissement" placeholder="Ville Etablissement: " aria-label="dateDebut" >
              </div>
              <div><br></div>
              <div class="col"><strong>Date début:</strong>
                <input class="form-control" type="date" name="dateDebut" placeholder="Date début: " aria-label="dateDebut">
              </div>
              <div class="col"><strong>Date fin:</strong>
                <input class="form-control" type="date" name="dateFin" placeholder="Date fin: " aria-label="dateFin">
              </div>
              <div class="col"><strong>Mention:</strong>
                <select class="form-control" name="mention" aria-label="mention">
                  <option value="mention">-- Sélectionner une mention --</option>
                  <option value="excellent">Excellent</option>
                  <option value="tres bien">Très bien</option>
                  <option value="bien">Bien</option>
                  <option value="assez bien">Assez bien</option>
                  <option value="passable">Passable</option>
                </select>
              </div>
            </div>
            <div><br></div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter">
            </div>
            <br><br>
            <div class="d-grid gap-2 col-6 mx-auto">
              <input  class="btn btn-primary" type="submit" name="suivant" value="Suivant">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
<a href="pageRecruteurFran.php">Retour</a>
        </form>
      </div>
    </div>
  </body>
</html>