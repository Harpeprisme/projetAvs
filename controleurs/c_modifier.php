<?php

if (!isset($_REQUEST['action'])) {
    // on n est pas connecte
    $_REQUEST['action'] = 'afficherModifier';
}
$action = $_REQUEST['action'];




switch ($action) {

    case 'afficherModifier': {
            $selectEtablissement = $pdo->selectEtablissement();
            $selectEleve = $pdo->selectEleve();
            $selectAVS = $pdo->selectAVS();
            $selectClasse = $pdo->selectClasse();
            include("vues/v_modifier.php");
            break;
        }
    case 'afficherEtablissement': {

            require_once("../modele/modele.inc.php");
            $pdo = PdoExemple::getPdoExemple();
            $idEtablissement = $_REQUEST['id_etablissement'];
            $selectClasseEtablissementAjax = $pdo->selectEtablissementAjax($idEtablissement);
            echo $selectClasseEtablissementAjax;

            break;
        }

    case 'afficherEleve': {
            require_once("../modele/modele.inc.php");
            $pdo = PdoExemple::getPdoExemple();
            $idEleve = $_REQUEST['id_eleve'];
            $selectClasseEleveAjax = $pdo->selectEleveAjax($idEleve);
            echo $selectClasseEleveAjax;



            break;
        }

    case 'afficherAppartient': {
            require_once("../modele/modele.inc.php");
            $pdo = PdoExemple::getPdoExemple();
            $idEleve = $_REQUEST['id_eleve'];
            $selectselectAppartientAjax = $pdo->selectAppartientAjax($idEleve);
            echo $selectselectAppartientAjax;

            break;
        }

    case 'afficherAVS': {
            require_once("../modele/modele.inc.php");
            $pdo = PdoExemple::getPdoExemple();
            $idavs = $_REQUEST['id_avs'];
            $selectClasseAVSAjax = $pdo->selectAVSAjax($idavs);
            echo $selectClasseAVSAjax;

            break;
        }

    case 'afficherEleveAvs': {
            require_once("../modele/modele.inc.php");
            $pdo = PdoExemple::getPdoExemple();
            $idavs = $_REQUEST['id_avs'];
            $selectClasseAVSAjax = $pdo->selectEleveAVSAjax($idavs);
            echo $selectClasseAVSAjax;

            break;
        }

    case 'modifierEtablissement': {
            $idEtablissement = $_REQUEST['Etablissement'][0];
            $nomEtablissement = $_REQUEST['nomEtablissement'];
            $typeEtablissement = $_REQUEST['typeEtablissement'];
            $responsableEtablissement = $_REQUEST['responsableEtablissement'];

            if ($_REQUEST['etablissement'] == 'Modifier') {

                $result = $pdo->updateEtablissement($idEtablissement, $nomEtablissement, $typeEtablissement, $responsableEtablissement);
                echo $result;
            } else {



                $result = $pdo->deleteAppartientEtablissement($idEtablissement);
                echo $result;
                $result = $pdo->deleteGereEtablissement($idEtablissement);
                echo $result;

                $result = $pdo->deleteEtablissement($idEtablissement);
                echo $result;
            }

            $selectEtablissement = $pdo->selectEtablissement();
            $selectEleve = $pdo->selectEleve();
            $selectAVS = $pdo->selectAVS();
            $selectClasse = $pdo->selectClasse();

            include("vues/v_modifier.php");
            break;
        }
    case 'modifierEleve': {

            //Ne modifie pas la classe et l'établissement 
        
        
            $idEleve = $_REQUEST['Eleve'][0];
            $nomEleve = $_REQUEST['nomEleve'];
            $prenomEleve = $_REQUEST['prenomEleve'];
            $dateNaissanceEleve = $_REQUEST['dateNaissanceEleve'];
            $classeEleve = $_REQUEST['classeEleve'];
            if (isset($_REQUEST['etablissementEleve'])) {
                $etablissementEleve = $_REQUEST['etablissementEleve'];
            }



            if ($_REQUEST['eleve'] == 'Modifier') {
                  
               
                
                $result = $pdo->updateEleve($idEleve, $nomEleve, $prenomEleve, $dateNaissanceEleve);
                echo $result;


                /* Problème ici car on supprime les lignes dans gère et appartient 
                  qui rattache l'élève
                  Pour palier aux problèmes il faut recréer les lgnes appartient  et gere ou l'etab = new etab */

                if ($pdo->selectEtablissementEleve($idEleve) != $etablissementEleve) {
                    $result = $pdo->insertAppartient($etablissementEleve, $idEleve, $classeEleve);
                    echo $result;
                } else {
                    $result = $pdo->updateAppartient($idEleve, $etablissementEleve, $classeEleve);
                     echo $result;
                }

                $avs = $pdo->selectavsEleve($idEleve);

                if ($pdo->selectGereEtablissement($etablissementEleve) == $etablissementEleve) {
                    $result = $pdo->insertGere($avs, $etablissementEleve);
                    echo $result;
                } else {
                    $result = $pdo->updateGere($avs, $etablissementEleve);
                    echo $result;
                }

                //Fin Problème
            } else {

                $idClasse = $pdo->selectClasseEleve($idEleve);

                $result = $pdo->deleteAppartientEleve($idEleve);
                echo $result;
                $result = $pdo->deleteEleve($idEleve);
                echo $result;

                if ($idClasse != NULL) {
                    $result = $pdo->deleteClasse($idClasse);
                    echo $result;
                }
            }

            $selectEtablissement = $pdo->selectEtablissement();
            $selectEleve = $pdo->selectEleve();
            $selectAVS = $pdo->selectAVS();
            $selectClasse = $pdo->selectClasse();
            include("vues/v_modifier.php");

            break;
        }
    case 'modifierAVS': {



            $idAVS = $_REQUEST['Avs'][0];

            $nomAVS = $_REQUEST['nomAVS'];
            $prenomAVS = $_REQUEST['prenomAVS'];
            $dateNaissanceAVS = $_REQUEST['dateNaissanceAVS'];
            $mailAVS = $_REQUEST['emailAVS'];
            if (isset($_REQUEST['eleveAVS'])) {
                $eleveAVS = $_REQUEST['eleveAVS'];
            }


            if ($_REQUEST['AVS'] == 'Modifier') {



                $result = $pdo->updateAVS($idAVS, $nomAVS, $prenomAVS, $dateNaissanceAVS, $mailAVS);
                echo $result;
                $avsEleve = $pdo->selectEleve();


//                    $result = $pdo->updateAvsEleve($allEleve, $idAVS);
//                    echo $result;
//                    //la
//                    $result = $pdo->updateGere($idAVS, $idEtablissement);
//                    echo $result;



                for ($i = 0; $i < sizeof($avsEleve); $i++) {

                    $pdo->updateEleveAVS($avsEleve[$i]['id_eleve']);
                    $result = $pdo->deleteGereAVS($idAVS);
                    var_dump($result);
                }

                
                    for ($i = 0; $i < sizeof($_REQUEST['eleveAVS']); $i++) {

                        $result = $pdo->updateModifierEleve($_REQUEST['eleveAVS'][$i], $idAVS);
                        
                        $idEtablissement = $pdo->selectEtablissementEleve($_REQUEST['eleveAVS'][$i]);
                      
                        
                        if($idEtablissement != NULL){
                            
                        $result = $pdo->insertGere($idAVS, $idEtablissement);
                          
                        }
                        
                    }
                
            } else {



                $result = $pdo->deleteGereAVS($idAVS);
                echo $result;



                var_dump($_REQUEST['eleveAVS']);
                if (isset($_REQUEST['eleveAVS'])) {

                    for ($i = 0; $i < sizeof($_REQUEST['eleveAVS']); $i++) {
                        $result = $pdo->updateEleveAVS($_REQUEST['eleveAVS'][$i], NULL);
                        echo $result;
                    }
                }



                $result = $pdo->deleteAVS($idAVS);
                echo $result;
            }

            $selectEtablissement = $pdo->selectEtablissement();
            $selectEleve = $pdo->selectEleve();
            $selectAVS = $pdo->selectAVS();
            $selectClasse = $pdo->selectClasse();
            include("vues/v_modifier.php");
            break;
        }
}