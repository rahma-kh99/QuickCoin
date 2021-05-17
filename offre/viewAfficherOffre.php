<div class="container">
        <div class="row">

            <div class="col-12">
           <?php
$id=$u->getIDO();
echo '<p>Offre de travail : '.$u->getoffre().'<br/> Horaire de travail : '
.$u->gethoraire().'<br/>Salaire:'.$u->getsalaire()'</p>';
echo '<div>
<a href="index.php?controller=offre&action=modifier&IDO='.$id.'">
Modifier </a></div>';
echo '<div><a 
href="index.php?controller=offre&action=supprimer&IDO='.$id.'">
Supprimer </a></div> ';
?>
            </div>

        </div>

    </div>
