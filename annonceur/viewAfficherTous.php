  <?php
foreach ($tab_u as $u){
echo "<p> Nom : ".$u->getnom();
echo " Prénom : ".$u->getprenom();
echo " Salaire proposé : ".$u->getadr_mail();
echo " Salaire proposé : ".$u->getville();
$id=$u->getIDA()
echo '<div ><a 
href="index.php?controller=annonceur&action=Supprimer&IDA='.$id.'">
Supprimer </a></div> ';
echo '<div >
<a href="index.php?controller=annonceur&action=modifier&IDA='.$id.'">
Modifier </a></div>';;

}?>