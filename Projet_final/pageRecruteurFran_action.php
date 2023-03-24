<?php

require('database.php');










if(isset($_POST['deconnexion'])){
    require('logoutFran.php');
}

if(isset($_POST['boitemssg'])){
    header('location:messages.php');
}

if(isset($_POST['publieroffre'])){
    header('location:publierOffre.php');
}
if(isset($_POST['creermssg'])){
    header('location:creerMessage.php');
}
if(isset($_POST['mesOffre'])){
    header('location:mesOffres.php');
}
if(isset($_POST['mssgenvoyer'])){
    header('location:messagesEnvoyer.php');
}
if(isset($_POST['note'])){
    header('location:note.php');
}
if(isset($_POST['mesNotes'])){
    header('location:mesNotes.php');
}

if(isset($_POST['profil'])){
    header('location:profile.php');
}

if(isset($_POST['trouver'])){
    header('location:score.php');
}

if(isset($_POST['ajout'])){
    header('location:infoRecruteur.php');
}






if(isset($_POST['btn-chercher'])){
    if(!empty($_POST['chercher'])){
        $_SESSION['chercher']=trim(htmlspecialchars($_POST['chercher']));
        header('location:pageDeRecherche.php');
    }}



    if(isset($_POST['trouver'])){
        $req=$bdd->query('SELECT * FROM candidat');
        $req->execute();
    
        if($req->rowcount()>0){
    
        while($result=$req->fetch()){
            $id_candidat=$result['num_c'];
            $score=0;
    
            if(!empty($_POST['diplome'])){
                $diplome=trim(htmlspecialchars($_POST['diplome']));
            $req2=$bdd->prepare('SELECT * FROM formation WHERE num_c=?');
            $req2->execute(array($id_candidat));
            if($req2->rowcount()>0){
                while($result2=$req2->fetch()){
                    if($result2['diplome']==$diplome){
                        $score=$score+10;
                    }}}}
    
    
     
    
    
                    
    
                    if(!empty($_POST['experience'])){
                        $experience=trim(htmlspecialchars($_POST['experience']));
                    $req2=$bdd->prepare('SELECT * FROM experience WHERE num_c=?');
                    $req2->execute(array($id_candidat));
                    if($req2->rowcount()>0){
                        while($result2=$req2->fetch()){
                            if($result2['experience']==$experience){
                                $score=$score+3;
                            }}}}
            
    
                            if(!empty($_POST['competence'])){
                                $competence=trim(htmlspecialchars($_POST['competence']));
                            $req2=$bdd->prepare('SELECT * FROM competence WHERE num_c=?');
                            $req2->execute(array($id_candidat));
                            if($req2->rowcount()>0){
                                while($result2=$req2->fetch()){
                                    if($result2['competence']==$competence){
                                        $score=$score+5;
                                    }}}}
    
                            
    
                                    if(!empty($_POST['langage'])){
                                        $langage=trim(htmlspecialchars($_POST['langage']));
                                    $req2=$bdd->prepare('SELECT * FROM langage WHERE num_c=?');
                                    $req2->execute(array($id_candidat));
                                    if($req2->rowcount()>0){
                                        while($result2=$req2->fetch()){
                                            if($result2['langage']==$langage){
                                                $score=$score+1;
                                            }}}}
    
            
    
            
                                            $req3=$bdd->prepare('INSERT INTO scores(score,num_c) VALUES(?,?)');
                                            $req3->execute(array($score,$id_candidat));
    
    
    
    
    
    
    
            }}
    
    
            
    
    
    
    
            $req4=$bdd->prepare('SELECT * FROM scores ORDER BY score DESC');
            $req4->execute();
            if($req4->rowcount()>0){
                while($result=$req2->fetch()){
                    $req3=$bdd->prepare('SELECT * FROM candidat WHERE num_c=?');
                    $req3->execute(array($result['num_c']));
                    while($result2=$req3->fetch()){
                        echo $result2['num_c'];echo '<br>';
                        echo $result2['nom'];echo '<br>';
                        echo $result2['prenom'];echo '<br>';
                        echo $result2['email'];echo '<br>';
                        echo $result2['tel'];echo '<br>';
                        echo '<br><br><br><br>';
            
            
                    }
                }
            }
            
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    









    header('location:score_recherche.php');}







?> 