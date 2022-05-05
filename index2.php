



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/spacelab/bootstrap.min.css">    

  
</head>
<body>
<?php

if (isset($_GET['pwd'])){
$pwd = $_GET['pwd'];
}
?>
<div>
   Mot de passe :     <?php echo $_GET['pwd'];
        ?>
</div>


<?php
function check_password($x){
$pwd=$x;
if( preg_match("#[a-z]+#", $pwd) ) {
        echo'
        <div class="alert alert-success text-center " role="alert">contient une minuscule</div>
            ';
                                        }
    else  {
        echo' 
         <div class="alert alert-danger text-center " role="alert">Ne contient PAS de une minuscule</div>
                ';
         $i=$i+1;
          }
    if( preg_match("#[A-Z]+#", $pwd) ) {
           echo'
           <div class="alert alert-success text-center " role="alert">contient une Majuscule</div>
            ';
                                        }
    else  {
       echo'
       <div class="alert alert-danger text-center " role="alert">Ne contient PAS de Majuscule</div>
         ';
        $i=$i+1;
          }
    if(preg_match("#\W+#", $pwd) ) {
       echo'
       <div class="alert alert-success text-center " role="alert">contient un caractère spécial</div>
        ';
                                        }

    else  {
       echo'
       <div class="alert alert-danger text-center " role="alert">Ne contient PAS de caractère spécial</div>
      ';
        $i=$i+1;
          }
    if( preg_match("#[0-9]+#", $pwd) ) {
           echo'
           <div class="alert alert-success text-center " role="alert">contient un nombre</div>
           ';
                                        }
    else  {
            echo'
            <div class="alert alert-danger text-center " role="alert">Ne contient pas de nombre</div>
            ';
        $i=$i+1;
          }
    if( strlen($pwd) > 12 ) {
               echo'             
            <div class="alert alert-success text-center  width=200px" role="alert" >contient + de 12 caractères</div>
                ';
                                        }
    else  {
                echo'
            <div class="alert alert-danger text-center " role="alert">Ne contient PAS + de 12 caractères</div>
            ';
        $i=$i+1;  
        }
                echo '<div class="progress">';

                        switch ($i){
                                case 0:
                                        echo  '<div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="0">100%</div>
                                         ';
                                        break;
                               
                                case 1:
                                        echo ' <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="20">80%</div>
                                        ';
                                        break;
                                case 2:
                                        echo '  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="40">60%</div>
                                        ';
                                        break;
                                case 3:
                                        echo ' <div class="progress-bar bg-danger" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="60">40%</div>
                                        ';
                                        break;
                                case 4:
                                        echo '  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="80">20%</div>
                                        ';
                                        break;
                                case 5:
                                        echo '  <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                        ';
                                        break;

                        }
                         
?>
</div>
<?php
 
}


check_password($pwd);
?>

</body>
</html>
