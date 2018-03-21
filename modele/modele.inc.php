<?php

/**
 * Classe d'accès aux données. 

 * Utilise les services de la classe PDO
 * pour l'application exempleMVC du cours sur la bdd bddemployés
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdo qui contiendra l'unique instance de la classe
 * @package default
 * @author AP
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
class PdoExemple {

    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=bddavs';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoExemple = null;
    private static $resultat = 1;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        try {
            PdoExemple::$monPdo = new PDO(PdoExemple::$serveur . ';' . PdoExemple::$bdd, PdoExemple::$user, PdoExemple::$mdp);
            PdoExemple::$monPdo->query("SET CHARACTER SET utf8");
        } catch (Exception $e) {
            throw new Exception("Erreur Ã  la connexion \n" . $e->getMessage());
        }
    }

    public function _destruct() {
        PdoExemple::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe PdoExemple

     * Appel : $instancePdoExemple = PdoExemple::getPdoExemple();

     * @return l'unique objet de la classe PdoExemple
     */
    public static function getPdoExemple() {
        if (PdoExemple::$monPdoExemple == null) {
            PdoExemple::$monPdoExemple = new PdoExemple();
        }
        return PdoExemple::$monPdoExemple;
    }

// Exemple pour accèder à la base de données

    public function selectEtablissementEleve($idEleve) {

        $req = "SELECT id_etablissement from appartient where id_eleve = " . $idEleve." limit 1";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        
        return $ligne['id_etablissement'];
    }
    
    public function selectGereEtablissement($etablissementEleve) {

        $req = "SELECT id_etablissement from gere where id_etablissement =" . $etablissementEleve;
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        return $ligne['id_etablissement'];
    }
    
    

    public function selectEtablissement() {

        $req = "SELECT `id_etablissement`, `nom`, `type_etablissement`, `responsable_etablissement` FROM `etablissement`";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }

    public function selectEtablissementAjax($id_etablissement) {

        $req = "SELECT `id_etablissement`, `nom`, `type_etablissement`, `responsable_etablissement` FROM `etablissement` WHERE `id_etablissement` = " . $id_etablissement . "";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($ligne);
        return $result;
    }

    public function selectAVS() {

        $req = "SELECT * FROM `avs`";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }

    
    public function selectEleve() {

        $req = "SELECT `id_eleve`, `nom`, `prenom`, `date_naissance`, `id_avs` FROM `eleve`";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }

    public function selectavsEleve($idEleve) {

        $req = "SELECT id_avs FROM eleve WHERE id_eleve =   " . $idEleve . "";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        return $ligne['id_avs'];
    }

    public function selectEleveAjax($idEleve) {

        $req = "SELECT `id_eleve`, `nom`, `prenom`, `date_naissance`, `id_avs` FROM `eleve` where id_eleve = " . $idEleve . "";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($ligne);
        return $result;
    }
    
    public function selectAppartientAjax($idEleve) {

        $req = "SELECT  `id_etablissement`, `id_eleve`, `id_classe` FROM `appartient` where id_eleve = " . $idEleve;
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($ligne);
        return $result;
    }
    
    public function selectEleveAVSAjax($idavs) {

        $req = "SELECT  * FROM `eleve` where id_avs = " . $idavs;
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($ligne);
        return $result;
    }
    
    public function selectEleveAVS($idavs) {

        $req = "SELECT  * FROM `eleve` where id_avs = " . $idavs;
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }

    public function selectAVSAjax($idavs) {

        $req = "SELECT `id_avs`, `nom`, `prenom`, `date_naissance`, `mail`, `Annee` FROM `avs` WHERE id_avs = " . $idavs . "";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($ligne);
        return $result;
    }

    public function selectMaxEleve() {

        $req = "SELECT max(id_eleve) as maxEleve from eleve";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        return $ligne['maxEleve'];
    }

    public function selectMaxClasse() {

        $req = "SELECT max(id_classe) as maxClasse from classe";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        return $ligne['maxClasse'];
    }

    public function selectClasse() {

        $req = "SELECT id_classe,nom from classe";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }
    

    
    public function selectClasseEleve($idEleve) {

        $req = "SELECT id_classe from appartient where id_eleve =".$idEleve;
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        return $ligne['id_classe'];
    }


    public function selectClasseEleveAjax($idEleve) {

        $req = "SELECT `id_etablissement`, `id_eleve`, `id_classe` FROM `appartient` WHERE id_eleve ='.$idEleve.'";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($ligne);
        return $result;
    }

    public function selectMaxAVS() {

        $req = "SELECT max(id_avs) as maxAvs from AVS";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        return $ligne['maxAvs'];
    }

    public function insertClasse($nomClasse) {


        $req = "INSERT INTO `classe`(`nom`) VALUES (:nomClasse)";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':nomClasse', $nomClasse, PDO::PARAM_STR);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function insertAVS($nomAVS, $prenomAVS, $date_NaissanceAVS, $mailAVS) {
        // retourne un tableau associatif contenant tous les projets

        $req = "INSERT INTO `avs`(`nom`, `prenom`, `date_naissance`, `mail`, `Annee`) VALUES (:nomAVS,:prenomAVS,:date_NaissanceAVS,:mailAVS,:anneeAVS)";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':nomAVS', $nomAVS, PDO::PARAM_STR);
        $prep->bindValue(':prenomAVS', $prenomAVS, PDO::PARAM_STR);
        $prep->bindValue(':date_NaissanceAVS', $date_NaissanceAVS, PDO::PARAM_STR);
        $prep->bindValue(':mailAVS', $mailAVS, PDO::PARAM_STR);
        $prep->bindValue(':anneeAVS', date("Y"), PDO::PARAM_STR);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function insertAppartient($idEtablissementEleve, $idEleve, $idClasse) {

        $req = "  INSERT INTO `appartient`(`id_etablissement`, `id_eleve`, `id_classe`) VALUES (:idEtablissementEleve, :idEleve, :idClasse)";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEtablissementEleve', $idEtablissementEleve, PDO::PARAM_INT);
        $prep->bindValue(':idEleve', $idEleve, PDO::PARAM_INT);
        $prep->bindValue(':idClasse', $idClasse, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function insertEtablissement($nomEtablissement, $typeEtablissement, $responsable) {

// retourne les informations sur le visiteur (la table utilisateur)
        $req = "INSERT INTO `etablissement`(`nom`, `type_etablissement`, `responsable_etablissement`) VALUES (:nomEtablissement,:typeEtablissement,:responsable)";



        $prep = PdoExemple::$monPdo->prepare($req);

        $prep->bindValue(':nomEtablissement', $nomEtablissement, PDO::PARAM_STR);
        $prep->bindValue(':typeEtablissement', $typeEtablissement, PDO::PARAM_STR);
        $prep->bindValue(':responsable', $responsable, PDO::PARAM_STR);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }

        return PdoExemple::$resultat;
    }

    public function insertEleve($nomEleve, $prenomEleve, $date_NaissanceEleve) {
        // retourne un tableau associatif contenant tous les projets

        $req = "INSERT INTO eleve(nom, prenom, date_naissance) VALUES(:nomEleve, :prenomEleve, :date_naissanceEleve)";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':nomEleve', $nomEleve, PDO::PARAM_STR);
        $prep->bindValue(':prenomEleve', $prenomEleve, PDO::PARAM_STR);
        $prep->bindValue(':date_naissanceEleve', $date_NaissanceEleve, PDO::PARAM_STR);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function insertGere($idMaxAvs, $etblissementEleve) {

        $req = " INSERT INTO `gere`(`id_avs`, `id_etablissement`) VALUES (:idMaxAvs, :etablissementEleve)";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idMaxAvs', $idMaxAvs, PDO::PARAM_INT);
        $prep->bindValue(':etablissementEleve', $etblissementEleve, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function updateGere($avs, $etablissementEleve) {

        $req = " UPDATE `gere` SET `id_etablissement`= :etablissementEleve WHERE `id_avs`=:avs";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':avs', $avs, PDO::PARAM_INT);
        $prep->bindValue(':etablissementEleve', $etablissementEleve, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function updateEtablissement($idEtablissement, $nomEtablissement, $typeEtablissement, $responsableEtablissement) {

        $req = " UPDATE `etablissement` SET `nom`=:nomEtablissement,`type_etablissement`=:typeEtablissement,`responsable_etablissement`=:responsableEtablissement where `id_etablissement`=:idEtablissement";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEtablissement', $idEtablissement, PDO::PARAM_INT);
        $prep->bindValue(':nomEtablissement', $nomEtablissement, PDO::PARAM_STR);
        $prep->bindValue(':typeEtablissement', $typeEtablissement, PDO::PARAM_STR);
        $prep->bindValue(':responsableEtablissement', $responsableEtablissement, PDO::PARAM_STR);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function updateEleveMax($idMaxAvs, $idEleve) {

        $req = " UPDATE `eleve` SET `id_avs` = :idMaxAvs WHERE `id_eleve` = :idEleve";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idMaxAvs', $idMaxAvs, PDO::PARAM_INT);
        $prep->bindValue(':idEleve', $idEleve, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function updateEleve($idEleve, $nomEleve, $prenomEleve, $dateNaissanceEleve) {

        $req = "UPDATE `eleve` SET `nom`=:nomEleve,`prenom`=:prenomEleve,`date_naissance`=:dateNaissanceEleve WHERE `id_eleve`=:idEleve";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEleve', $idEleve, PDO::PARAM_INT);
        $prep->bindValue(':nomEleve', $nomEleve, PDO::PARAM_STR);
        $prep->bindValue(':prenomEleve', $prenomEleve, PDO::PARAM_STR);
        $prep->bindValue(':dateNaissanceEleve', $dateNaissanceEleve, PDO::PARAM_STR);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
    public function updateEleveAVS($idEleve) {

        $req = "UPDATE `eleve` SET `id_avs`= NULL WHERE `id_eleve`=:idEleve";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEleve', $idEleve, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
     
    
    public function updateModifierEleve($idEleve,$idAVS) {

        $req = "UPDATE `eleve` SET `id_avs`= :idAVS WHERE `id_eleve`=:idEleve";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEleve', $idEleve, PDO::PARAM_INT);
        $prep->bindValue(':idAVS', $idAVS, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
    public function updateAvsEleve($idEleve,$id_avs) {

        $req = "UPDATE `eleve` SET `id_avs`= :id_avs WHERE `id_eleve`=:idEleve";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEleve', $idEleve, PDO::PARAM_INT);
        $prep->bindValue(':id_avs', $id_avs, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
    
    
    
    public function updateAVS($idAVS,$nomAVS,$prenomAVS,$dateNaissanceAVS,$mailAVS){
        
        $req = "UPDATE `avs` SET `nom`=:nomAVS,`prenom`=:prenomAVS,`date_naissance`=:dateNaissanceAVS,`mail`=:mailAVS WHERE `id_avs`=:idAVS";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idAVS', $idAVS, PDO::PARAM_INT);
        $prep->bindValue(':nomAVS', $nomAVS, PDO::PARAM_STR);
        $prep->bindValue(':prenomAVS', $prenomAVS, PDO::PARAM_STR);
        $prep->bindValue(':dateNaissanceAVS', $dateNaissanceAVS, PDO::PARAM_STR);
        $prep->bindValue(':mailAVS', $mailAVS, PDO::PARAM_STR);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
        
    }
    
     public function updateGereAVS($idAVS,$idetablisseme){
        
        $req = "UPDATE `avs` SET `nom`=:nomAVS,`prenom`=:prenomAVS,`date_naissance`=:dateNaissanceAVS,`mail`=:mailAVS WHERE `id_avs`=:idAVS";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idAVS', $idAVS, PDO::PARAM_INT);
        $prep->bindValue(':nomAVS', $nomAVS, PDO::PARAM_STR);
        $prep->bindValue(':prenomAVS', $prenomAVS, PDO::PARAM_STR);
        $prep->bindValue(':dateNaissanceAVS', $dateNaissanceAVS, PDO::PARAM_STR);
        $prep->bindValue(':mailAVS', $mailAVS, PDO::PARAM_STR);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
        
    }
    

    
    
    
    

    public function updateAppartient($idEleve, $etablissementEleve, $classeEleve) {

        $req = "UPDATE `appartient` SET `id_etablissement`=:etablissementEleve,`id_classe`=:classeEleve WHERE `id_eleve`=:idEleve";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEleve', $idEleve, PDO::PARAM_INT);
        $prep->bindValue(':etablissementEleve', $etablissementEleve, PDO::PARAM_INT);
        $prep->bindValue(':classeEleve', $classeEleve, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
  
    
    

    public function deleteEtablissement($idEtablissement) {

        $req = "DELETE  FROM `etablissement` WHERE `id_etablissement` =:idEtablissement";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEtablissement', $idEtablissement, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
    public function deleteAppartientEtablissement($idEtablissement) {

        $req = "DELETE FROM `appartient` WHERE `id_etablissement` =:idEtablissement";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':idEtablissement', $idEtablissement, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
     public function deleteAppartientEleve($idEleve) {

        $req = "DELETE FROM `appartient` WHERE `id_eleve` =:id_eleve";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':id_eleve', $idEleve, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }

    public function deleteGereEtablissement($idEtablissement) {

        $req = "DELETE FROM `gere` WHERE `id_etablissement` = :id_etablissement";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':id_etablissement', $idEtablissement, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
    public function deleteGereAVS($idavs) {

        $req = "DELETE FROM `gere` WHERE `id_avs` = :id_avs";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':id_avs', $idavs, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
     public function deleteEleve($idEleve) {

        $req = "DELETE FROM `eleve` WHERE `id_eleve` = :id_eleve";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':id_eleve', $idEleve, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
    public function deleteAVS($idAVS) {

        $req = "DELETE FROM `avs` WHERE `id_avs` = :id_avs";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':id_avs', $idAVS, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
    public function deleteClasse($idClasse) {

        $req = "DELETE FROM `classe` WHERE `id_classe` = :id_classe";

        $prep = PdoExemple::$monPdo->prepare($req);
        $prep->bindValue(':id_classe', $idClasse, PDO::PARAM_INT);
        $prep->execute();

        if ($prep->errorInfo()[1] != null) {
            PdoExemple::$resultat = 0;
        }
        return PdoExemple::$resultat;
    }
    
function listEleveParEtab($id){
      $req='SELECT *
      FROM eleve where id_eleve in (select id_eleve from appartient where id_etablissement = '.$id.')';
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      return $ligne;
    }
    function listAVSParEtab($id){
      $req='SELECT *
      FROM avs where id_avs in (select id_avs from gere where id_etablissement = '.$id.')';
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      return $ligne;
    }
    function getInfoEleve($id){
      $req='SELECT *
      FROM eleve where id_eleve = '.$id.'';
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetch(PDO::FETCH_ASSOC);
      return $ligne;
    }
    function getInfoEtab($id){
      $req='SELECT *
      FROM etablissement where id_etablissement = '.$id.'';
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetch(PDO::FETCH_ASSOC);
      return $ligne;
    }
    function getInfoAVS($id){
      $req='SELECT *
      FROM avs where id_avs = '.$id.'';
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetch(PDO::FETCH_ASSOC);
      return $ligne;
    }
    function getAVSEtab($id){
      $req='SELECT *
      FROM etablissement where id_etablissement in (select id_etablissement from gere where id_avs = '.$id.')';
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      return $ligne;
    }
    function getAVSEleve($id){
      $req='SELECT *
      FROM eleve where id_eleve in (select id_eleve from appartient where id_avs = '.$id.')';
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      return $ligne;
    }

    public function selectAppartient() {

        $req = "SELECT * FROM `appartient`";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }
     public function getEtabEleve($id) {
        $req = 'SELECT *
      FROM etablissement where id_etablissement in (select id_etablissement from appartient where id_eleve = '.$id.')';
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        return $ligne;
    }

     public function getClasseEleve($id) {
        $req = 'SELECT *
      FROM classe where id_classe in (select id_classe from appartient where id_eleve = '.$id.')';
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetch(PDO::FETCH_ASSOC);
        return $ligne;
    }
    public function getAllAnnee() {
        $req = "SELECT DISTINCT(annee) FROM `avs`";
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }
     public function getAVSParAnnee($annee) {
        $req = 'SELECT * FROM `avs` where annee='.$annee.'';
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }


    public function getEleveAVSParAnnee($id, $annee) {
        $req = 'SELECT * FROM eleve WHERE id_avs in (select id_avs from avs where id_avs = '.$id.' and annee='.$annee.')';
        $rs = PdoExemple::$monPdo->query($req);
        $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }
    function allListAVSParEtab(){
      $req="SELECT E.*, GROUP_CONCAT(A.nom SEPARATOR ',') as listNomAVS, GROUP_CONCAT(A.id_avs SEPARATOR ',') as listIdAVS, GROUP_CONCAT(A.prenom SEPARATOR ',') as listPrenomAVS
            FROM `etablissement` E
            LEFT JOIN `gere` G ON G.id_etablissement = E.id_etablissement
            LEFT JOIN `avs` A ON G.id_avs = A.id_avs
            GROUP BY id_etablissement";
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      return $ligne;
    }
    
    function allListEleveParAVS($annee){
      $req="SELECT A.*, GROUP_CONCAT(E.nom SEPARATOR ',') as listNomEleve, GROUP_CONCAT(E.prenom SEPARATOR ',') as listPrenomEleve 
            FROM `avs` A
            LEFT JOIN `eleve` E ON E.id_avs = A.id_avs
            Where annee = ".$annee."
            GROUP BY id_avs";
      $rs = PdoExemple::$monPdo->query($req);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      return $ligne;
    }
}


?>
