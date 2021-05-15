function verif() {

var nom = Inscription.nom.value;
var prenom = Inscription.prenom.value;
var email = Inscription.email.value;


/* controle de saisie nom */
compt=0;
    erreurnom=false;

    if (nom.length == 0){
        alert("saisir votre nom");
    }
    else {
        do{
            if((nom.charAt(compt).toUpperCase()<"A") || (nom.charAt(compt).toUpperCase()>"Z"))
      
                {
                    erreurnom = true;
                }
                else {
                    compt++;
                }
       
        }while((erreurnom == false) && (compt < nom.length));
    
        if( erreurnom == true )
        {
            alert("le nom n'avoire pas des chiffres ");
        }
    }
    

    /* controle de saisie prenom*/
comp=0;
    erreurprenom=false;

    if (prenom.length == 0){
        alert("saisir votre prenom");
    }
    else {
        do{
            if((prenom.charAt(comp).toUpperCase()<"A") || (prenom.charAt(comp).toUpperCase()>"Z"))
      
                {
                    erreurprenom = true;
                }
                else {
                    comp++;
                }
       
        }while((erreurprenom == false) && (comp < prenom.length));
    
        if( erreurprenom == true )
        {
            alert("le nom n'avoire pas des chiffres ");
        }
    }

    /* controle de saisie mail */
     if (email.length > 0){
        if (email.indexOf("@")== -1) 
        {
            alert("l'email doit contient un @");
        }
    }
else {
    alert("il faut saisir un email");
}


}










