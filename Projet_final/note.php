<!DOCTYPE html>
<html lang="en">
<?php require('head.php'); ?>
<link rel="stylesheet" href="creeMessage.css">
<?php require('note_action.php'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>


   
<div class="div1">
    
    <h1> Recrutement <span> $ En ligne</span></h1>
    
    </div> 
    <br><br><br>
    
    <div class="nv"><strong><i>Nouvelle note :</i></strong></div>
    <div class="form">
    <form method="POST" action="" >
        <table>
            
        <div class="error">
            <?php
        if(isset($errormssg)){
            echo $errormssg ;}
            ?>
            </div>
            
            <tr><td><strong>Message:</strong></td><td><textarea class="in2" name="note" placeholder="Ajouter une note ..."></textarea></td></tr>
            <tr><td><input class="in3" type="submit" value="Enregistrer" name="enregistrer"></td><td><input class="in3" name="annuler" type="submit" value="Annuler"></td></tr>

</table>
</form>
        </div>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
<a href="pageRecruteurFran.php"><strong>Retour</strong></a>

    
</body>
</html>