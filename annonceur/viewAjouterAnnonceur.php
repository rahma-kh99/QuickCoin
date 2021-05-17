<p>Annonceur à été bien enregistré</p>
<?php
$id = $u->getIDA(); 
echo "<p> Annonceur
<a href='index.php?controller=annonceur&action=afficherAnnonceur&IDA=$id'> $id </a> 
</p>" ;
?>