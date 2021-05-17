<div class="container ">

<div>
  <input type="text" name="" placeholder="recherche">
  <a href="#"> <i class="fas fa-search"></i></a>
</div>
 <div>
  <a href="viewCreerOffre.php"> Créer Offre</a>
</div>
    
    <div >
        <h1>Les Offres Mi Temps :</h1>
    </div>

    <?php
foreach ($tab_u as $u){
echo "<p> Offre : ".$u->getoffre();
echo " Horaire de Travail : ".$u->gethoraire();
echo " Salaire proposé : ".$u->getsalaire();
$id=$u->getIDO()
echo '<div ><a 
href="index.php?controller=offre&action=Supprimer&IDO='.$id.'">
Supprimer </a></div> ';
echo '<div >
<a href="index.php?controller=offre&action=modifier&IDO='.$id.'">
Modifier </a></div>';;

}?>