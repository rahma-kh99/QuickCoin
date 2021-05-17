<form class="center box" name="InscritAnnonceur" method="Get" action="">
   
		               <h1>Inscription</h1><br/> 

                   
                    <label for="text">   Nom: </label>
  <input type="text" name="nom" size="20"
maxlength="15" placeholder="nom" autofocus required /></p>
        <label for="text"  >   pr&eacutenom: :</label>
        <input type="text" name="prenom" size="20"
maxlength="50" placeholder="prénom" autofocus required/></p>
    <label for="email"> E-mail :</label>
    <input type="email" name="email" autofocus required ></p>
        
        <label for="md-passe"> Mot de passe :</label>
<input type="password" name="md-passe" id="md-passe" pattern="[a-z][0-9]{7}" maxlength="8"autofocus required />


   <p><label for="ville">ville </label>
<select name="ville" id="ville" >
<option value="Tunise"> Tunise</option>
<option value="Ariana"> Ariana </option>
<option value="Beja"> Beja </option>
<option value="Ben arous"> Ben arous </option>
<option value="Gabes"> Gabes </option>
<option value="Gafsa"> Gafsa </option>
<option value="Benzaret"> Benzaret </option>
<option value="Jandouba"> Jandouba </option>
<option value="Kairouan"> Kairouan </option>
<option value="Kasserine"> Kasserine </option>
<option value="Kbeli"> Kbeli </option>
<option value="Manouba"> Manouba </option>
<option value="Kef"> Kef </option>
<option value="Mahdia"> Mahdia </option>
<option value="Mednin"> Mednin </option>
<option value="Monastir"> Monastir </option>
<option value="Nabeul"> Nabeul </option>
<option value="Sfax"> Sfax </option>
<option value="Sidi bouzid"> Sidi bouzid </option>
<option value="Siliana"> Siliana </option>
<option value="Sousse"> Sousse </option>
<option value="Tataouine"> Tataouine </option>
<option value="Zaghouan"> Zaghouan </option>
<option value="Touzeur"> Touzeur </option>
<option value="Tunisie" selected>Tunisie</option>
</select> </p>

<button class="click" type="submit" name="envoyer"  onclick="verif()"   ><a>envoyer</a></button> 
<button class="click" type="reset" name="annuler"  ><a>annuler</a></button> <br/>


	</form>
