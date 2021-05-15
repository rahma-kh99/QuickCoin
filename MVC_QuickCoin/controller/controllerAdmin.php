<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelAdmin.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelAnnonceur.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelCantact.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelEtudiant.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelOffres.php"); 

$controller = 'admin';

if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];

	else $action="afficher_tous"; 	
	
switch ($action) {
    case "afficher_tous":
        $pagetitle = "Espace Admin";
        $view   = "afficher_tous";
       	$tab_ad = ModelAdmin::getAll();
       	$tab_a  = ModelAnnonceur::getAll();
       	$tab_c  = ModelCantact::getAll();
       	$tab_e  = ModelEtudiant::getAll();
       	$tab_o  = ModelOffres::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "details_admin":	
		if(isset($_REQUEST['IDAD'])){
			$IDAD = $_REQUEST['IDAD'];
			$u = ModelAdmin::select($IDAD);
				if($u!=null){
					$pagetitle = "Details de l'Admin";
					$view = "details_admin";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "suprimer_admin":
		if(isset($_REQUEST['IDAD'])){
			$IDAD = $_REQUEST['IDAD'];
			$del = ModelAdmin::select($IDAD);
			if($del!=null){
			$del->delete($IDAD);
			header('Location: index.php?controller=Admin&action=afficher_tous');
			}
		}
	    break;
		
	case "Etudiant":
	    $pagetitle = "Espace Admin";
        $view = "admin";
        $s_view = "gestion des etudiant";
       	$tab_c = modelEtudiant::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
		
	    break;

    case "Annonceur":
	    $pagetitle = "Espace Admin";
        $view = "admin";
        $s_view = "gestion des Annonceur";
       	$tab_c = ModelAnnonceur::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
		
	    break;

	    case "Offres":
	    $pagetitle = "Espace Admin";
        $view = "admin";
        $s_view = "gestion des offres";
       	$tab_c = modelOffres::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
		
	    break;


	    case "Contact":
	    $pagetitle = "Espace Admin";
        $view = "admin";
        $s_view = "gestion des cantact";
       	$tab_c = modelContact::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
		
	    break;	
		
	
	
	
}
?>