<!DOCTYPE html>
<html lang="en">
<?php require('head.php'); ?>
<?php require('publierOffre_action.php'); ?>
<link rel="stylesheet" href="creeMessage.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
    
<div class="div1">
    
    <h1> Recrutement <span> $ En ligne</span></h1>
    
    </div> 
    <br><br><br>
    
    <div class="nv"><strong><i>Nouvelle offre :</i></strong></div>
    <div class="form">
    <form method="POST" action="" >
        <table>
            
        <div class="error">
            <?php
        if(isset($errormssg)){
            echo $errormssg ;}
            ?>
            </div>
            <tr><td><strong>Intitulé de poste:</strong></td><td><input class="in1" type="text" name="poste" placeholder="Veuillez saisir une petite intitulé de poste"></td></tr>
            <tr><td><strong>Nom de l'entreprise:</strong></td><td><input class="in1" type="text" name="nomEntre" placeholder="Veuillez saisir le nom de l'entreprise"></td></tr>
            <tr><td><strong>Ville de l'entreprise:</strong></td><td><input class="in1" type="text" name="villeEntre" placeholder="Veuillez saisir la ville de l'entreprise"></td></tr>
            <tr><td><strong>Niveau à avoir pour occuper le poste:</strong></td>
            <td><select name="niveau">
                    <option value="ignorant">Ignorant</option>
                    <option value="debutant">Débutant</option>
                    <option value="confirme">Confirmé</option>
                    <option value="expert">Expert</option>
                    <option value="maitre">Maitre</option>
                </select></td></tr>
                <tr><td><strong>Domaine :</strong></td>
            <td><select name="domaine">
                    <option value="agriculture">Agriculture</option>
                    <option value="art">Art,Communication</option>
                    <option value="banque,assurance">Banque,Assurance</option>
                    <option value="btp">BTP</option>
                    <option value="commerce">Commerce</option>
                    <option value="enseignement">Enseigenement</option>
                    <option value="hottelerie,trourisme">Hotellerie,Tourisme</option>
                    <option value="industrie">Industrie</option>
                    <option value="mode">Mode</option>
                    <option value="sante">Santé</option>
                    <option value="sciences,electronique">Sciences,Electronique</option>
                </select></td></tr>
                <tr><td><strong>Type de contrat:</strong></td>
            <td><select name="contrat">
                    <option value="contrat à durée indéterminée(CDI)">Contrat à durée indéterminée(CDI)</option>
                    <option value="contrat à durée déterminée(CDD)">Contrat à durée déterminée(CDD)</option>
                    <option value="contrat à durée déterminée à objet défini">Contrat à durée déterminée à objet défini</option>
                    <option value="contrat à durée déterminée Senior (CDD Senior)">Contrat à durée déterminée "Senior"(CDD Senior)</option>
                    <option value="le CDI intérimaire">Le CDI intérimaire</option>
                    <option value="contrat à durée déterminée d'usage">Contrat à durée déterminée d'usage</option>
            </select></td></tr>
            <tr><td><strong>Description du poste:</strong></td><td><textarea class="in1" name="description" placeholder="Veuillez ajouter une petite description concernant le poste"></textarea></td></tr>

            
            
            
            
            
            
            <tr><td><input class="in3" type="submit" value="Publier" name="publier"></td><td><input class="in3" name="annuler" type="submit" value="Annuler"></td></tr>

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


