<?php
require_once("modele/modele.inc.php");
include("vues/v_entete.php") ;
session_start();
// on se connecte et creation de la variable statique $pdo

$pdo = PdoExemple::getPdoExemple();
if(!isset($_REQUEST['do'])){
    // on n est pas connecte
     $_REQUEST['do'] = 'accueil';   
}	 
$do = $_REQUEST['do'];
switch($do){
    
	case 'accueil':{
		include("controleurs/c_accueil.php");break;
	}
	case 'informations':{
		include("controleurs/c_informations.php");break;
	}
        case 'ajouter':{
		include("controleurs/c_ajouter.php");break;
	}
        case 'modifier':{
		include("controleurs/c_modifier.php");break;
	}
        case 'historique':{
		include("controleurs/c_historique.php");break;
	}
        
        
	}


