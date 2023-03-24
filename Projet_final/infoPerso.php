
<!DOCTYPE html>
<html lang="en">
<?php require('head.php');?>
<?php require('infoPerso_action.php');?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"">
<link rel="stylesheet" href="login.css">


<body>
<div ><pre></pre></div>
<div ><pre></pre></div>
<div ><pre></pre></div>
<div ><pre></pre></div>
<div ><pre></pre></div>
<div ><pre></pre></div>
 
<div class="div1">
    
    <h1> Recrutement <span> $ En ligne</span></h1>
    
    </div> 
    <div ><pre></pre></div>
    <div ><pre></pre></div>
    <div ><pre></pre></div>


<div class="div1">
    <div>
        <p><strong>Veuillez ajouter une photo :</strong></p>
    </div> <!--fin div1-->

    <div class="form5"> <!--comme,cer div form-->




  <form name="fo" method="POST" action="" enctype="multipart/form-data">
        <div class="error">
<?php
        if(isset($errormssg)){
            echo $errormssg ;}
            ?></div>


<div class="row">
 </div>
 
  <br><br>
  <div class="col">
    <input name="image" type="file" class="form-control" placeholder="Photo" aria-label="photo">

  </div>





<br><br>

<div class="d-grid gap-2 col-6 mx-auto">
  <input class="btn btn-primary" type="submit" name="envoyer" value="Envoyer">
        </div>
        
<a href="pageRecruteurFran.php" align="center"><strong>Passer</strong></a>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg>
      

    </form>
        </div> <!--terminer div form-->
    </div>

</body>
</html>