<p>Message à été bien enregistré</p>
<?php
$id = $u->getIDC(); 
echo "<p> Offre
<a href='index.php?controller=Contact&action=lireMessage&IDC=$id'> $id </a> 
</p>" ;
?>