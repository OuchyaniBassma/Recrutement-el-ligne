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
    
    <div class="nv"><strong><i>New offer :</i></strong></div>
    <div class="form">
    <form method="POST" action="" >
        <table>
            
        <div class="error">
            <?php
        if(isset($errormssg)){
            echo $errormssg ;}
            ?>
            </div>
            <tr><td><strong>Job title:</strong></td><td><input class="in1" type="text" name="poste" placeholder="Please enter a short job title"></td></tr>
            <tr><td><strong>Company Name:</strong></td><td><input class="in1" type="text" name="nomEntre" placeholder="Please enter company name"></td></tr>
            <tr><td><strong>Company city:</strong></td><td><input class="in1" type="text" name="villeEntre" placeholder="Please enter the city of the company"></td></tr>
            <tr><td><strong>Niveau à avoir pour occuper le poste:</strong></td>
            <td><select name="niveau">
                    <option value="ignorant">Ignorant</option>
                    <option value="debutant">Beginner</option>
                    <option value="confirme">Confirmed</option>
                    <option value="expert">Expert</option>
                    <option value="maitre">Master</option>
                </select></td></tr>
                <tr><td><strong>Domaine :</strong></td>
            <td><select name="domaine">
                    <option value="agriculture">Agriculture</option>
                    <option value="art">Art,Communication</option>
                    <option value="banque,assurance">Bank, Insurance</option>
                    <option value="btp">BTP</option>
                    <option value="commerce">Trade</option>
                    <option value="enseignement">Education</option>
                    <option value="hottelerie,trourisme">Hospitality, Tourism</option>
                    <option value="industrie">Industry</option>
                    <option value="mode">Fashion</option>
                    <option value="sante">Health</option>
                    <option value="sciences,electronique">Sciences, Electronics</option>
                </select></td></tr>
                <tr><td><strong>Type of Contract:</strong></td>
            <td><select name="contrat">
                    <option value="contrat à durée indéterminée(CDI)">Permanent contract (CDI)</option>
                    <option value="contrat à durée déterminée(CDD)">Fixed-term contract (CDD)</option>
                    <option value="contrat à durée déterminée à objet défini">Fixed-term contract with a defined purpose</option>
                    <option value="contrat à durée déterminée Senior (CDD Senior)">"Senior" fixed-term contract (CDD Senior)</option>
                    <option value="le CDI intérimaire">The temporary CDI</option>
                    <option value="contrat à durée déterminée d'usage">Fixed-term contract of use</option>
            </select></td></tr>
            <tr><td><strong>Job Description:</strong></td><td><textarea class="in1" name="description" placeholder="Please add a short job description"></textarea></td></tr>

            
            
            
            
            
            
            <tr><td><input class="in3" type="submit" value="Publish" name="publier"></td><td><input class="in3" name="annuler" type="submit" value="Cancel"></td></tr>

</table>
</form>
        </div>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
<a href="pageRecruteurAng.php"><strong>Back</strong></a>

</body>
</html>


