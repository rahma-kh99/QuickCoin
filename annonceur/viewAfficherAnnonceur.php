<div class="container">
        <div class="row">

            <div class="col-12">
           <?php
$id=$u->getIDA();
echo '<p>Nom Annonceur : '.$u->getnom().'<br/> prénom : '
.$u->getprenom().'<br/>E-mail:'.$u->getadr_mail().'<br/>E-mail:'.$u->getville().'</p>';
echo '<div>
<a href="index.php?controller=annonceur&action=modifier&IDA='.$id.'">
Modifier </a></div>';
echo '<div><a 
href="index.php?controller=offre&action=supprimer&IDA='.$id.'">
Supprimer </a></div> ';
?>
            </div>

        </div>

    </div>
