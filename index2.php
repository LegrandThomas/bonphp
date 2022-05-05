



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<?php

$pwd = $_GET['pwd'];



function check_password(){

  $pwd="LAPIN1222212/a";
        
    print_r($pwd);
    echo'<br>';
                if( preg_match("#[a-z]+#", $pwd) ) {
                     echo'contient une minuscule<br>';
                                                    }
                else  {
                     $erreur .="doit contenir une minuscule<br>";
                      }
                if( preg_match("#[A-Z]+#", $pwd) ) {
                        echo'contient une majuscule<br>';
                                                    }
                else  {
                    $erreur .="doit contenir une majuscule<br>";
                      }
                if(preg_match("#\W+#", $pwd) ) {
                     echo'contient un symbole<br>';}
                else  {
                        $erreur .="doit contenir un symbole<br>";
                      }
                if( preg_match("#[0-9]+#", $pwd) ) {
                        echo'contient un nombre<br>';}
                else  {
                        $erreur .="doit contenir un nombre<br>";
                      }
                if( strlen($pwd) > 12 ) {
                         echo'contient + de 12 caractéres<br>';}
                else  {
                        $erreur .="12 caractéres minimun<br>";
                    }

                if($erreur!=""){ 
                        echo "Password non valid(password trop weak):<br> $erreur"; }
               else {
                        echo "Password Validé.";
                                }
}
check_password();

//voir pour passer la varaible recu en get en parametre pour la fonction et l'appel
?>
</body>
</html>
