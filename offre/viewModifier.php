<?php $id=$up->getIDO(); ?>
<form method="POST" 
action="index.php?controller=offrer&action=modifier&IDO=<?=$id?>"> 
<fieldset> 
<legend>Modification Offre </legend> 
<p> <label for="Offre">Offre de travail</label> : <input type="text" value= "<?=$up->getoffre()?>"name="offre" id="offre" required readonly/>
</p> 
<p> <label for="H">Horaire</label> : <input type="text" value= 
"<?=$up->gethoraire() ?>" name="H" id="H" required/> 
</p> 
<p> <label for="S">Salaire</label> : <input type="text" 
value= "<?=$up->getsalaire()?>" name="S" id="S" required/> 
</p> 
<p> <input type="submit" value="Envoyer" /> </p> 
</fieldset> </form>