<!DOCTYPE html>
<html lang="fr"> 

<DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
<title>réalisé par khayati rahma & roudayna dridi</title>
  <meta name="description" content="plateforme des offres mi temps">
  <meta name="keywords" content="Quickcoin,kuicoin,coin,travaille,etudiant,mi-temps,annonce">
  <link rel="stylesheet" href="../css/style.css">
   <script src="../js/controle.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<div class="row"></div>
<div class="col-sm-8"><img src="../images/2.png"/></div>
</div>
</head>
<body>

<?php

$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;


require_once($ROOT.$DS."header.php");
$filepath = $ROOT.$DS.$controller.$DS;

$filename = "view".ucfirst($view).".php";


require_once($filepath.$filename);

require_once($ROOT.$DS."footer.php");

?>
