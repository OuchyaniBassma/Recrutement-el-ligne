
<!DOCTYPE html>
  <html lang="en">
    <?php require('head.php');?>
    <?php require('competence_action.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
              ?>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" name="comp" class="form-control" placeholder="Compétence" aria-label="comp">
              </div>
              <div><br></div>
              <div class="col">
                <textarea name="desc" class="form-control" placeholder="Description" aria-label="desc"></textarea>
              </div>
            </div>
            <div><br></div>

            <div class="d-grid gap-2 col-6 mx-auto">
              <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter">
            </div><br><br>
            <div class="d-grid gap-2 col-6 mx-auto">
              <input  class="btn btn-primary" type="submit" name="suivant" value="Suivant">
            </div>
        </form>
        
      </div> <!--terminer div form-->
    </div>
  </body>
</html>
