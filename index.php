<?php 
session_start();
if (!key_exists("Prenom", $_SESSION) ||
    !key_exists("Nom", $_SESSION) ||
    !key_exists("Age", $_SESSION)||
    !key_exists("Taille", $_SESSION)||
    !key_exists("civilité", $_SESSION)) {
    $has_session = session_status() == PHP_SESSION_ACTIVE;
    print_r ($has_session);
    print_r ($_COOKIE);
}
?>


<!DOCTYPE html>
<html lang="fr">

    <?php include("./includes/head.inc.html"); ?> 

<body>

    <?php include("./includes/header.inc.html"); ?> 

    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-3">
            <a role="button" class="btn btn-outline-secondary w-100" href="index.php" name="home">Home</a> 
           <?php  if ($has_session > 2) include_once './includes/ul.inc.php'; 
           ?>
          
             
             </div>

            <section class="col-md-9 mt-3">

                   
                   
                    <?php

                     if(isset($_GET['add'])) {include './includes/form.inc.html'; }
                     else{
                        
                   
                                      if(isset($_POST['enreg'])){
                
                                          
                                              $first_name = $_POST['Prenom'];
                                              $last_name = $_POST['Nom'];
                                              $age= $_POST['Age'];
                                              $size = $_POST['Taille'];
                                              $civility= $_POST['civilité'];
                                              $table = array( $first_name, $last_name, $age, $size, $civility,$table
                                                            );             
           
                                              $_SESSION['table'] = $table; 
                                            print_r ($_SESSION); 
                                            $a= $has_session+1;
                                             print_r ($a); 
                                             echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>' ;
                                               if ($has_session = 2){ include_once './includes/ul.inc.php';} 
           
                                            }  else{
                                               
                                            echo '<a role="button" class=" btn btn-primary" href="index.php?add">Ajouter des données</a>';
                                                
                                            }    
                                             
                                                              
                                        } 
                                        
                             
                                           
                            
                          
                                                                              
                    ?>
                  



                    

                  
<!--

-->
            </section>
        </div>

    </div>
    <br>
    <?php include("./includes/footer.inc.html"); ?> 
</body>
</html>