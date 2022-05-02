<?php 
session_start();
//if (!key_exists("first_name", $_SESSION) ||
  //  !key_exists( "last_name", $_SESSION) ||
    //!key_exists( "age", $_SESSION)||
   // !key_exists( "size", $_SESSION)||
    //!key_exists("civility", $_SESSION)) {
    //$has_session = session_status() == PHP_SESSION_ACTIVE;
    //print_r ($has_session);
    //print_r ($_COOKIE);
//}
if (isset($_SESSION['table'])) $table=$_SESSION['table'];

?>


<!DOCTYPE html>
<html lang="fr">

<?php include("./includes/head.inc.html"); ?> 

<body>

<?php include("./includes/header.inc.html"); ?> 

<div class="container">
<div class="row">
<nav  class="col-md-3 mt-3">
    <a role="button" class="btn btn-outline-secondary w-100" href="index.php">Home</a> 
    <?php 
     if (isset($table)) include_once './includes/ul.inc.php';
    ?>  
</nav>
           
<section class="col-md-9 mt-3">

  <?php
         
         $a="<p> ";
         $b=" "  ;
         $c= " <br>J'ai ";
         $d=" ans et je mesure " ; 
         $e="m.</p><br><br>"; 
         $f='<div>à la ligne n°';
         $g=' correspond la clé "';
         $h='" et contient "';
         $i=0;
         $j='"</div>';

if(isset($_GET['add'])) {
    echo'<p class="h1 text-center">Ajouter des données</p>';
    echo '<form action="index.php" method="POST">';
    include './includes/form.inc.html'; 
    echo '<button type="submit" class="btn btn-primary" name="enreg">Enregistrer des données</button>

   
    </div>

    
</form>';



}

elseif (isset($_GET['addmore'])) {
    echo'<p class="h1 text-center">Ajouter  plus de données</p>';
    echo '<form action="index.php" method="POST">';
    include './includes/form2.inc.php'; 
echo '</div>
</form>';

}

                                                                  
  elseif (isset($_POST['enreg'])){
                                          
            $table = array( 
            "first_name" => htmlspecialchars($_POST['Prenom']),
            "last_name" => htmlspecialchars($_POST['Nom']),
            "age"=> htmlspecialchars($_POST['Age']),
            "size" => htmlspecialchars($_POST['Taille']),
            "civility"=> htmlspecialchars($_POST['inlineRadioOptions'])
                            );             
           
            $_SESSION['table'] = $table; 
                           
            echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>' ;
                                           
                                    }  elseif (isset($_POST['enreg2'])){$table = array( 
                                        "first_name" => htmlspecialchars($_POST['Prenom']),
                                        "last_name" => htmlspecialchars($_POST['Nom']),
                                        "age"=> htmlspecialchars($_POST['Age']),
                                        "size" => htmlspecialchars($_POST['Taille']),
                                        "civility"=> htmlspecialchars($_POST['inlineRadioOptions']),
                                                        
                                        "html" => htmlspecialchars($_POST['HTML']),
                                        "css"=> htmlspecialchars($_POST['CSS']),
                                        "javascript" => htmlspecialchars($_POST['JS']),
                                        "php"=> htmlspecialchars($_POST['PHP']),
                                        "mysql" => htmlspecialchars($_POST['MySQL']),
                                        "bootstrap"=> htmlspecialchars($_POST['Bootstrap']),
                                        "symfony" => htmlspecialchars($_POST['Symfony']),
                                        "react"=> htmlspecialchars($_POST['React']),
                                        "color"=> htmlspecialchars($_POST['color']), 
                                        "dob"=> htmlspecialchars($_POST['dateN']), 
                                        "img"=> array(
                                                         "name" => htmlspecialchars($_POST['nameIMG']),
                                                         "type" => htmlspecialchars($_POST['typeIMG']),
                                                         "tmp_name"=> htmlspecialchars($_POST['tmpIMG']),
                                                         "error" => htmlspecialchars($_POST['errorIMG']),
                                                         "size"=> htmlspecialchars($_POST['sizeIMG']),
                                                    
                                    
                                        )
                                    );             
                                       
                                        $_SESSION['table'] = $table;    
                                        echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>' ;                                                   
                                } 
                                    
                                    elseif(isset($table)){
                                                        
                                        switch(isset($_GET)){
                                            case isset($_GET['debugging']):
                                                //echo ' passé en debugging';
                                                echo '<h2 class="text-center">Débogage</h2>';
                                                echo "<p>===> Lecture du tableau à l'aide de la fonction print_r()</p>";
                                                echo '<pre>';
                                                print_r($table);
                                                echo '</pre>';
                                            break;

                                            case isset($_GET['concatenation']):
                                                //echo ' passé en concatenation';
                                                        
                                                 echo '<h2 class="text-center">Concaténation</h2>';
                                                 echo'<br>';
                                                 echo "<h3 class='fs-5'>===> Construction d'une phrase avec le contenu du tableau :</h3>";
                                
                                                 $x = ($table['civility'] == "Man") ? "Mr  " :  "Mme "; 
                                                   
                                                 echo $a. $x . $table["first_name"] . $b. $table["last_name"] . $c . $table["age"] . $d . $table['size'] .$e;
                               
                                                 echo "<h3 class='fs-5'>===> Construction d'une phrase après MAJ du tableau :</h3>";
                                                 $table['first_name'] = ucfirst ($table['first_name']);
                                                 $table['last_name'] = strtoupper($table['last_name']);
                                                 echo $a. $x . $table["first_name"] . $b . $table["last_name"] . $c. $table["age"] . $d . $table['size'] . $e;
                                
                                                 echo "<h3 class='fs-5'>===> Affichage d'une virgule à la place du point pour la taille :</h3>";

                                                 $table['size'] = str_replace('.' , ',', $table['size']);
                                                 $table['first_name'] = ucfirst ($table['first_name']);
                                                 $table['last_name'] = strtoupper($table['last_name']);
                                                              
                                                 echo $a. $x . $table["first_name"] . $b . $table["last_name"] . $c . $table["age"] . $d. $table['size'] . $e;
                                            break;

                                            case isset($_GET['loop']):
                                                //echo (" passé en loop");
                                                echo "<h2 class='text-center'>Boucle</h2><br>";
                                                echo "<p>===> Lecture du tableau à l'aide d'une boucle foreach</p><br>";
                                                      
                                                foreach($table as $clef => $valeur){
                                                echo $f . $i . $g . $clef . $h . $valeur . $j;
                                                $i++;
                                                                                    }
                                            break;

                                            case isset($_GET['function']):
                                                //echo (" passé en function");
                                                echo "<h2 class='text-center'>Fonction</h2><br>";
                                                echo "<p>===> J'utilise ma fonction readTable()</p><br>";
                                                      
                                                function readTable(){
                                                $k='<div>à la ligne n°';
                                                $l=' correspond la clé "';
                                                $m='" et contient "';
                                                $n='"</div>';
                                                $i = 0;
                                                $table = $_SESSION['table'];
                                                foreach($table as $clef => $valeur){
                                                echo $k . $i . $l . $clef . $m . $valeur . $n;
                                                $i++;
                                                                    }
                                                            }
                                                            readTable();
                                            break;

                                            case isset($_GET['del']):
                                                //echo (" passé en del");
                                                session_destroy(); 
                                                unset ($_SESSION['table']);
                                                echo '<p class="alert-success text-center py-3"> Données supprimées !</p>';
                                            break;

                                            default: echo '<a role="button" class=" btn btn-primary" href="index.php?add">Ajouter des données</a>';
                                            echo '<a role="button" class="btn btn-outline-secondary w-30" href="index.php?addmore">Ajouter plus de données</a>';
                                                                                 
                                                                        }
                                                                       
                                                                    }else{
                                                                        echo '<a role="button" class=" btn btn-primary" href="index.php?add">Ajouter des données</a>';
                                                                        echo '<a role="button" class="btn btn-outline-secondary w-30" href="index.php?addmore">Ajouter plus de données</a>';
                                                                          } 


                                                                        
  ?>
                  

</section>
        </div>

    </div>
    <br>
    <?php include("./includes/footer.inc.html"); ?> 
</body>
</html>