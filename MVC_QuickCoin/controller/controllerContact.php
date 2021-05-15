<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelContact.php"); 

if(isset($_REQUEST['action']))	
	$action = $_REQUEST['action'];
	else $action="Contact";	
	
switch ($action) {

	case "Tous_les_messages":
        $pagetitle = "contctez-nous";
        $view = "contact";
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case "Tous_les_messages":
        $pagetitle = "Les messages reçus  ";
        $view = "Tous_les_messages";
       	$tab_u = ModelContact::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "lire_message":	
		if(isset($_REQUEST['IDC'])){
			$IDC = $_REQUEST['IDC'];
			$u = ModelContact::select($IDC);
				if($u!=null){
					$pagetitle = "Ouvrir message";
					$view = "lire_message";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
		
	case "Enregistrer_message":
		$pagetitle = "Enregistrer nouveau message";
		$view = "Enregistrer_message";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "ajouter_message":
		if(isset($_REQUEST['IDC']) && isset($_REQUEST['Nom']) && isset($_REQUEST['Prenom'])&&(isset($_REQUEST['@mail'])&&(isset($_REQUEST['Message'])        )){
			
			$IDC = $_REQUEST["IDC"];
			$Nom = $_REQUEST["Nom"];
			$Prenom = $_REQUEST["Prenom"];
			$mail = $_REQUEST["@mail"];
			$Msg = $_REQUEST["Message"];
			
			$recherche = ModelContact::select($IDC);
			if($recherche==null){
				$u = new ModelContact($IDC, $Nom, $Prenom,$mail, $Msg);	
				$tab = array(
				"IDE" => $IDC ,
				"Nom" => $Nom,
				"prenom" => $Prenom,
				"@mail" => $mail,
				"Mdp" => $Msg,
				);	

				$u->insert($tab);
				$pagetitle = "Message Enregistré";
				$view = "ajouter_message";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	
}
?>
