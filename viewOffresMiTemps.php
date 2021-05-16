<div class="container ">

<div>
  <input type="text" name="" placeholder="recherche">
  <a href="#"> <i class="fas fa-search"></i></a>
</div>
  <form>
<div >
  <h3>Publier Offre:</h3>

        <TEXTAREA class="area" NAME="l'offre"ROWS="5"COLS="60" placeholder="Votre Offre"></TEXTAREA>

      <label for="Horaire"> Horaire </label>
     <input type="text" name="Horaire" size="20"maxlength="20"/> <br/>

      <label for="sal"> salaire </label>
      <input type="text" name="salaire" id="sal" size="15"maxlength="10" placeholder="DT" /> <br/> 

<div  class="center">
<button type="submit" name="envoyer"  onclick="verif()"><a>envoyer</a></button> 
<button type="reset" name="annuler"  ><a>annuler</a></button> <br/>
</div>

  </form>
    
    <div >
        <h1>Les Offres Mi Temps :</h1>
    </div>
    <div>
    <table>
  <thead>
    <tr>
      <th >Offres</th>
      <th >Horaire</th>
      <th >Salaire</th>
    </tr>
  </thead>
  <tbody>
  <?php
while ($ligne = $rep->fetchObject()){
?>
<tr> 
 <td><?=$ligne->Offre; ?> </td>
 <td><?=$ligne->Horaire; ?> </td>
  <td><?=$ligne->Salaire; ?> </td>
</tr> 
<?php
}
?>
</tbody>
</table>
    </div>
</div>



