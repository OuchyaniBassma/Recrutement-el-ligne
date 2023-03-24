<?php require('pageRecruteurAng_action.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
</head>
<body>


<div class="container">
<div class="row">
        <div class="col-lg-4">
           <div class="profile-card-4 z-depth-3">
            <div class="card">
              <div class="card-body text-center bg-primary rounded-top">
               <div class="user-box">
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
              <h5 class="mb-1 text-white"><?php  echo $_SESSION['nom'].'   '.$_SESSION['prenom'];    ?></h5>
              
                <?php
                 $req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
                  $req->execute(array($_SESSION['num_r']));
                  $result=$req->fetch();
                  if($req->rowcount()>0){ 
                    echo '<h6 class="text-light">'.$result['profession'].'</h6>';
                   } ?>
             </div>
              <div class="card-body">
                <ul class="list-group shadow-none">
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-phone-square"></i>
                  </div>
                  <div class="list-details">
                    <span><?php  echo $_SESSION['tel'];    ?></span>
                    <small>Phone</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="list-details">
                    <span><?php  echo $_SESSION['email'];    ?></span>
                    <small>Adress e-mail</small>


                    <?php 
                    $req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
                    $req->execute(array($_SESSION['num_r']));
                    $result=$req->fetch();
                    if($req->rowcount()>0){

                   echo '<li class="list-group-item">';
                  echo '<div class="list-icon">';
                    echo '<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                  </svg></i>';
                  echo '</div>';
                 echo  '<div class="list-details">';
                    echo '<span>'  ;echo  $result['linkedin'];   echo '</span>';
                    echo '<small>Linkedin</small>';}



?>




<?php 
                    $req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
                    $req->execute(array($_SESSION['num_r']));
                    $result=$req->fetch();
                    if($req->rowcount()>0){

                   echo '<li class="list-group-item">';
                  echo '<div class="list-icon">';
                    echo '<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg></i>';
                  echo '</div>';
                 echo  '<div class="list-details">';
                    echo '<span>'  ;echo  $result['facebook'];   echo '</span>';
                    echo '<small>Facebook</small>';}



?>
<?php 
                    $req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
                    $req->execute(array($_SESSION['num_r']));
                    $result=$req->fetch();
                    if($req->rowcount()>0){

                   echo '<li class="list-group-item">';
                  echo '<div class="list-icon">';
                    echo '<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg></i>';
                  echo '</div>';
                 echo  '<div class="list-details">';
                    echo '<span>'  ;echo  $result['instagram'];   echo '</span>';
                    echo '<small>Instagram</small>';}



?>



                  </div>
                </li>
                <div class="list-details">
                    <span> </span>
                    
                  </div>  
                  <div class="list-details">
                    <span> </span>
                    
                  </div>  
                  <div class="list-details">
                    <span> </span>
                    
                  </div>                  
                </li>
                </ul>
                <div class="row text-center mt-4">
                  <div class="col p-2">

                  <?php  
                  $req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
                    $req->execute(array($_SESSION['num_r']));
                    $result=$req->fetch();
                    if($req->rowcount()>0){ 
                    echo '<h4 class="mb-1 line-height-5">'.$result['nbrProjet'].'</h4>';
                        
                    echo '<small class="mb-0 font-weight-bold">Project</small>';}
                    ?>

                   </div>
                    
                 </div>
               </div>
               
             </div>
           </div>
        </div>
        <div class="col-lg-8">
           <div class="card z-depth-3">
            <div class="card-body">
            <ul class="nav nav-pills nav-pills-primary nav-justified">
                
                
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active show" id="profile">
                    <form method="POST" action="">
                    <h5 class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> <input class="in" type="submit" name="ajout" value="Add">
                    </h5>

                    </form>




                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Pofile description </h6>
                                <?php  
                                $req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
                             $req->execute(array($_SESSION['num_r']));
                             $result=$req->fetch();
                             if($req->rowcount()>0){
                                echo '<p>'.$result['descriptionP'].'</p>';}
                                
                             ?>

                            <?php   
                             $req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
                             $req->execute(array($_SESSION['num_r']));
                             $result=$req->fetch();
                             if($req->rowcount()>0){ 
                                echo '<h6>hobbies</h6>';
                            echo '<p>'.$result['loisir'].'</p>';} ?>
                        </div>
                        <div class="col-md-6">
                            <h6>Skills</h6>
                            <?php    
                            $req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
                            $req->execute(array($_SESSION['num_r']));
                            $result=$req->fetch();
                            if($req->rowcount()>0){ 
                            echo '<a href="javascript:void();" class="badge badge-dark badge-pill">'.$result['comp'].'</a>';}
                            ?>
                            </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span>Recent activities </h5>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <?php
$req=$bdd->prepare('SELECT * FROM inforecruteur WHERE num_r=?');
$req->execute(array($_SESSION['num_r']));
$result=$req->fetch();
if($req->rowcount()>0){
    echo '<tr><td>';echo '<p>'.$result['activite'].'</p></td></tr>';}









?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissible" role="alert">
    			   <button type="button" class="close" data-dismiss="alert">×</button>
				    <div class="alert-icon">
					 <i class="icon-info"></i>
				    </div>
				    <div class="alert-message">
				      <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
				    </div>
                  </div>
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                    <form>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Mark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Jhonsan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="mark@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Website</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="State">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="jhonsanmark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>
</div>
    

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
<a href="pageRecruteurAng.php"><strong>Back</strong></a>

</body>
</html>
