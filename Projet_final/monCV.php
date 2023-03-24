<?php require('database.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <meta charset="utf-8">
        <link rel="Stylesheet" href="Form2.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    </head>
    <body>



    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
<a href="pageRecruteurFran.php"><strong>Retour</strong></a>

    <main>
            <header>
            <button class="dow">Télécharger</button>
        <script>
            var btn=document.querySelector("button");
            btn.onclick=()=>
                window.print();
        </script>



    <div class="photo">
    <?php   
             $req=$bdd->prepare('SELECT * FROM images WHERE id=?');
                  $req->execute(array($_SESSION['id']));
                  $result=$req->fetch();
                  if($req->rowcount()==0){
                  echo '<img src="IMAGE/Account-User-PNG-Clipart.png" alt="user avatar">';}
                  else{
                    $v='IMAGE/'.$result['nameImg'];
                    echo '<img src="'.$v.'" alt="user avatar">';
                  }
                  ?>
    </div>

    </header>


    <div class="des">
    <h3><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'] ?></h3>
    <?php // echo $_POST['interet'] ?></p>
    </div>
    <div class="right">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg><?php echo'  '.$_SESSION['email']; ?></p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
  <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z"/>
</svg> <?php echo'  '.$_SESSION['ville']; ?></p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z"/>
</svg><?php echo '  '.$_SESSION['tel']; ?></p>
    </div>
                </header>



                <section class="section-left">
                <h4>Diplome et Formation </h4>
                <hr class="light">
                <div class="div">
                    <div>
                    <!--Formation -->
                    <div>
                    <?php
                    $req=$bdd->prepare('SELECT * FROM formation WHERE num_c=?');
                    $req->execute(array($_SESSION['num_c']));
                    if($req->rowcount()>0){
                       while($result=$req->fetch()){
                            echo "<b> " .$result['diplome']. ": </b>";
                            echo "<strong>  " . $result['etablissement'] . "</strong>";
                            echo '  '.$result['villeEtablissement'].'<br>';
                            echo " avec une mention ".$result['mention']." </b><br>";
                            echo  $result['dateDebut'].'  à  '.$result['dateFin'].'</br></br>';
                        }}
                        
                    ?>
                    </div>
                    </div>
                </div>


                <h4>Experiences Professionneles </h4>
                <hr class="light">
                <div class="div">
                    <!--Experiences Professionnele -->
                    <?php
                        $req=$bdd->prepare('SELECT * FROM experience WHERE num_c=?');
                        $req->execute(array($_SESSION['num_c']));
                        if($req->rowcount()>0){
                           while($result=$req->fetch()){
                            echo "<b>" . $result['poste'] . " </b>";
                            echo "<strong> : " . $result['nomEntreprise'] . "</strong></br>";
                            echo  $result['dateDebut'].' à '.$result['dateFin'].'</br></br>';
                        }
                        }
                    ?>
                </div>
            </section>


            <section class="section-right">
                <h4>Competences</h4>
                <hr class="light">
                <div class="skils">
                    <!--Competence -->
                    <div class='po'>
                    <?php
                        
                        $req=$bdd->prepare('SELECT * FROM competence WHERE num_c=?');
                        $req->execute(array($_SESSION['num_c']));
                        if($req->rowcount()>0){
                           while($result=$req->fetch()){
                            echo "<div class='po'>";
                                echo '<h5>' . $result['nomCompetence'] . '</h5>';
                                echo '<p>' . $result['descriptionComp'] . '</p>';
                                echo "</div>";

                            }
                        }
                    ?>

                </div>


                <h4>Langues</h4>
                <hr class="light">
                <div class="skils">
                    <!--Langue 1-->
                    <?php
                        $req=$bdd->prepare('SELECT * FROM langage WHERE num_c=?');
                        $req->execute(array($_SESSION['num_c']));
                        if($req->rowcount()>0){
                           while($result=$req->fetch()){
                            echo "<div class='po'>";
                            echo "<h5>" . $result['langue'] . " :</h5>";
                            echo "<p>" . $result['niveau'] . "</p>";
                            echo "</div>";
                        }
                        }
                    ?>
                      </div> 
                      

        </main>
        </br>
        
    </body>
    




    </html>