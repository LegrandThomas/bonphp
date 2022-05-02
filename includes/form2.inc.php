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


<div class="row">
<div class="col-md-7 mx-auto my-1">
<form action="index.php" method="POST">

<?php


include './includes/form.inc.html'; 
echo '</div></form>'
?>
</div>
<div class="card col-md-4 mx-auto my-1">Connaissances

    <div>
    <input type="checkbox" name="HTML" value="HTML5" id="HTML">
    <label for="HTML">HTML</label>  
    </div>
    <div>
    <input type="checkbox" name="CSS" value="CSS" id="CSS">
    <label for="CSS">CSS</label>  
    </div>
    <div>
    <input type="checkbox" name="JavaScript" value="JavaScript" id="JavaScript">
    <label for="JavaScript">JavaScript</label>  
    </div>
    <div>
    <input type="checkbox" name="PHP" value="PHP" id="PHP">
    <label for="PHP">PHP</label>  
    </div>
    <div>
    <input type="checkbox" name="MySQL" value="MySQL" id="MySQL">
    <label for="MySQL">MySQL</label>  
    </div>
    <div>
    <input type="checkbox" name="Bootstrap" value="Bootstrap" id="Bootstrap">
    <label for="Bootstrap">Bootstrap</label>  
    </div>
    <div>
    <input type="checkbox" name="Symfony" value="Symfony" id="Symfony">
    <label for="Symfony">Symfony</label>  
    </div>
    <div>
    <input type="checkbox" name="React" value="React" id="React">
    <label for="React">React</label>  
    </div>
    <br>
    couleur préférée
    <input type="color" value="#fad345" name="textcolor" id="color">
    <br>
    <label for="date">Date de naissance</label>
    <input id="date" type="date" value="jj//mm/aaaa" id="dateN">


</div>

<div class="card col-11 mx-auto my-1">Joindre une image (jpg ou png</div>
<input type="file" name="file">
<div class="d-flex flex-row-reverse bd-highlight">
<button type="submit" class="btn btn-primary" name="enreg2">Enregistrer des données</button>

</div>
</form>

</div>
</div>
