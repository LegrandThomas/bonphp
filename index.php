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
    echo '<form action="index.php" method="POST" >';
    include './includes/form.inc.html'; 
    echo '<button type="submit" class="btn btn-primary" name="enreg">Enregistrer des données</button>

   
    </div>

    
</form>';



}

elseif (isset($_GET['addmore'])) {
    echo'<p class="h1 text-center">Ajouter  plus de données</p>';
    echo '<form action="index.php" method="POST"  enctype="multipart/form-data">';
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
                                        
                                    }  elseif (isset($_POST['enreg2']))
                                            
                                    
                                    
                                    
                                        {$table = array( 
                                        "first_name" => htmlspecialchars($_POST['Prenom']),
                                        "last_name" => htmlspecialchars($_POST['Nom']),
                                        "age"=> htmlspecialchars($_POST['Age']),
                                        "size" => htmlspecialchars($_POST['Taille']),
                                        "civility"=> htmlspecialchars($_POST['inlineRadioOptions']),
                                                        
                                        "html" =>($_POST['HTML']),
                                        "css"=> ($_POST['CSS']),
                                        "javascript" => ($_POST['JS']),
                                        "php"=> ($_POST['PHP']),
                                        "mysql" => ($_POST['MySQL']),
                                        "bootstrap"=> ($_POST['Bootstrap']),
                                        "symfony" => ($_POST['Symfony']),
                                        "react"=> ($_POST['React']),
                                        "color"=> ($_POST['color']), 
                                        "dob"=> ($_POST['dateN']), 
                                        "img" => $_FILES['file']
                                       
                                            //array(
                                            //"name" => $_FILES['file']['name'],
                                            //"type" => $_FILES['file']['type'],
                                            //"tmp_name" => $_FILES['file']['tmp_name'],
                                            //"error" => $_FILES['file']['error'],
                                            //"size" => $_FILES['file']['size']
                                        

                                    );  
                                    $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));

                                if ($_FILES['file']['size'] > 2097152 ){
                                    echo '<p class="alert alert-danger  text-center py-3"> taille de l\'image doit être supérieur à 2 mo!</p>';
                                    unset ($_SESSION['table']);
                                }
                                elseif($file_ext!=="jpeg"&&"png"&&"gif"){
                                    echo '<p class="alert alert-danger  text-center py-3"> Extension  non prise en charge</p>';
                                    unset ($_SESSION['table']);
                                  }
                                
                                elseif($_FILES['file']['error']>"0") {
                                    echo '<p class="alert alert-danger  text-center py-3"> Échec du téléchargement!</p>';
                                   
                                  
                                    switch($_FILES['file']['error']){
                                        case 1:
                                            echo '<p class="alert alert-danger  text-center py-3"> Échec du téléchargement!</p>';
                                            //print ($_FILES['file']['error']);
                                            echo '<p class="alert alert-danger  text-center py-3"> Valeur : 1. La taille du fichier téléchargé excède la valeur de upload_max_filesize, configurée dans le php.ini</p>';
                                        break;

                                        case 2:
                                            
                                            echo '<p class="alert alert-danger  text-center py-3"> Échec du téléchargement!</p>';
                                            //print ($_FILES['file']['error']);
                                            echo '<p class="alert alert-danger  text-center py-3"> Valeur : 2. La taille du fichier téléchargé excède la valeur de MAX_FILE_SIZE, qui a été spécifiée dans le formulaire HTML</p>';
                                        break;

                                        case 3:
                                            echo '<p class="alert alert-danger  text-center py-3"> Échec du téléchargement!</p>';
                                            //print ($_FILES['file']['error']);
                                            echo '<p class="alert alert-danger  text-center py-3">Valeur : 3. Le fichier n\'a été que partiellement téléchargé</p>';
                                        break;

                                        case 4:
                                            echo '<p class="alert alert-danger  text-center py-3"> Échec du téléchargement!</p>';
                                            //print ($_FILES['file']['error']);
                                            echo '<p class="alert alert-danger  text-center py-3"> Valeur : 4. Aucun fichier n\'a été téléchargé</p>';
                                        break;

                                        case 6:
                                            echo '<p class="alert alert-danger  text-center py-3"> Échec du téléchargement!</p>';
                                            //print ($_FILES['file']['error']);
                                            echo '<p class="alert alert-danger  text-center py-3"> Valeur : 6. Un dossier temporaire est manquant</p>';
                                        break;

                                        case 7:
                                            echo '<p class="alert alert-danger  text-center py-3"> Échec du téléchargement!</p>';
                                            //print ($_FILES['file']['error']);
                                            echo '<p class="alert alert-danger  text-center py-3"> Valeur : 7. Échec de l\'écriture du fichier sur le disque</p>';
                                        break;

                                        case 8:
                                            echo '<p class="alert alert-danger  text-center py-3"> Échec du téléchargement!</p>';
                                            //print ($_FILES['file']['error']);
                                            echo '<p class="alert alert-danger  text-center py-3">  Valeur : 8. Une extension PHP a arrêté l\'envoi de fichier. PHP ne propose aucun moyen de déterminer quelle extension est en cause. L\'examen du phpinfo() peut aider</p>';
                                        break;

                                    }
                                    print_r($_FILES['file']['error']);
                                    unset ($_SESSION['table']);
                                }else
                                     {
                                        move_uploaded_file($_FILES['file']['tmp_name'],"./uploaded/".$_FILES['file']['name']);
                                        print "Téléchargé avec succès!";
                                        $_SESSION['table'] = $table;    
                                        echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>' ;                                                   
                                 } }  
                                    
                                    elseif(isset($table)){
                                        switch(isset($_GET)){
                                            case isset($_GET['debugging']):
                                                //echo ' passé en debugging';
                                                $table = array_filter($table); 
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
                                                $k='<div>à la ligne n°';
                                                $l=' correspond la clé "';
                                                $m='" et contient ';
                                                $n='"</div>';
                                                $i = 0;
                                                echo "<h2 class='text-center'>Boucle</h2><br>";
                                                echo "<p>===> Lecture du tableau à l'aide d'une boucle foreach</p><br>";
                                                $table = array_filter($table);                 
                                                foreach ($table as $clef => $valeur){
                                                    if($clef=='img'){
                                                        echo $k . $i . $l . $clef . $m ;
                                                        break;
                                                    }
                                                    echo $k . $i . $l . $clef . $m . $valeur . $n;
                                                     $i=$i+1;
                                                                                }
                                                if ($table['img']['name']!=""){
                                                    echo '<figure>';
                                                    echo "<img w-100 src='uploaded/".$table['img']['name']."'>";
                                                    echo '</figure>';
                                                }     
                                            break;

                                            case isset($_GET['function']):
                                                //echo (" passé en function");
                                                echo "<h2 class='text-center'>Fonction</h2><br>";
                                                echo "<p>===> J'utilise ma fonction readTable()</p><br>";
                                                function readTable(){
                                                $k='<div>à la ligne n°';
                                                $l=' correspond la clé "';
                                                $m='" et contient ';
                                                $n='"</div>';
                                                $i = 0;
                                                $table = $_SESSION['table'];
                                                $table = array_filter($table);  
                                                foreach ($table as $clef => $valeur){
                                                    if($clef=='img'){
                                                        echo $k . $i . $l . $clef . $m ;
                                                        break;
                                                    }
                                                    echo $k . $i . $l . $clef . $m . $valeur . $n;
                                                     $i=$i+1;
                                                                                }
                                                if ($table['img']['name']!=""){
                                                    echo '<figure>';
                                                    echo "<img w-100 src='uploaded/".$table['img']['name']."'>";
                                                    echo '</figure>';
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
                                            default: echo '<a role="button" class=" btn btn-primary me-3" href="index.php?add">Ajouter des données</a>';
                                            echo '<a role="button" class="btn btn-outline-secondary w-30" href="index.php?addmore">Ajouter plus de données</a>';    
                                                                        }
                                                                    }else{
                                                                        echo '<a role="button" class=" btn btn-primary me-3" href="index.php?add">Ajouter des données</a>';
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




