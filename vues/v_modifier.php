<div class="container">

    <div class="row">
        <div class="col"></div>
        <div class="col">     
            <h1>Modifier</h1>
        </div>  
        <div class="col"> </div>
    </div>
    <!--Debut Radios Boutons -->
    <div class="row">
        <div class ="col">   
        </div>
        <div class ="col">
            <input  type="radio" name="rb" id="rbEtablissement" checked="true" onclick="affEtabModif();" />
            <label class="radio"  for="rbEtablissement">Etablissement</label>   
            <input   type="radio" name="rb" id="rbEleve" onclick="affEtabModif();"/>
            <label class="radio"for="rbEleve">Eleve</label>     
            <input type="radio" name="rb" id="rbAVS" onclick="affEtabModif();" />
            <label class="radio"  for="rbAVS">AVS</label>
        </div>
        <div class="col">
        </div>

    </div>
    <!--fin Radios Boutons -->
    <!--Début Modifier Etablissement-->
    <form class="navbar-form navbar-left form" role="search" id="modifierEtablissement" action="index.php?do=modifier&action=modifierEtablissement" method="POST">
        <div class="row col"> 

            <div class ="col">
                <input type="text" id="searchEtablissement" class="form-control" placeholder="Rechercher">

                <select id="listeEtablissement" name="Etablissement[]"  onclick="afficherEtablissement()" multiple>
                    <?php
                    if (isset($selectEtablissement)) {
                        for ($i = 0; $i < sizeof($selectEtablissement); $i++) {
                            echo'<option id=' . $selectEtablissement[$i]['id_etablissement'] . ' value=' . $selectEtablissement[$i]['id_etablissement'] . '>' . $selectEtablissement[$i]['nom'] . '</option>';
                        }
                    } else {
                        echo'<option>Il n\'y a aucun établissement</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="col-sm-9">
                <div class="row ">
                    <label class="col" for="nomEtablissement"> Nom:</label>
                    <input  class="col" type="text" id="nomEtablissement" name="nomEtablissement" value="" required/>
                </div>  
                <div class=" row">
                    <label class="col" for="typeEtablissement">Type établissement:</label>
                    <input  class="col" type="text" id="typeEtablissement" name="typeEtablissement" value="" required />
                </div>
                <div class="row">
                    <label  class="col" for="responsableEtablissement">Responsable:</label>
                    <input  class="col" type="text" id ="responsableEtablissement" name="responsableEtablissement" value="" required />
                </div>
                <div class="row">
                    <input type="submit" class="form-control form-control-sm col" style="background-color: #dc3545;" value="Supprimer" name="etablissement" />
                    <input type="submit"  class="form-control form-control-sm col" value="Modifier" name="etablissement" />
                </div>
            </div>
        </div>

    </form>
    <!--Fin Modifier Etablissement-->
    <!--Début Modifier Elève-->
    <form class="navbar-form navbar-left" role="search" id="modifierEleve" style="display: none;" action="index.php?do=modifier&action=modifierEleve" method="POST">

        <div class="row">   
            <div class ="col">

                <input type="text"  class="form-control" id ="searchEleve" placeholder="Rechercher">

                <select id="listeEleve" name="Eleve[]" onclick="afficherEleve()" multiple>
                    <?php
                    if (isset($selectEleve)) {

                        for ($i = 0; $i < sizeof($selectEleve); $i++) {
                            echo'<option id=' . $selectEleve[$i]['id_eleve'] . ' value=' . $selectEleve[$i]['id_eleve'] . '>' . $selectEleve[$i]['nom'] . " " . $selectEleve[$i]['prenom'] . '</option>';
                        }
                    } else {
                        echo'<option>Il n\'y a aucun élève</option>';
                    }
                    ?>
                </select>
            </div>  


            <div class="col-sm-9">
                <div class="row">
                    <label class="col" for="nomEleve"> Nom:</label>
                    <input class="col" type="text" id="nomEleve" name="nomEleve" value="" required/>
                </div>  
                <div class="row">
                    <label class="col" for="prenomEleve">Prenom:</label>
                    <input class="col" type="text" id="prenomEleve" name="prenomEleve" value="" required />
                </div>
                <div class="row">
                    <label class="col" for="dateNaissanceEleve">Date de naissance:</label>
                    <input class="col"type="date" id="dateNaissanceEleve" name="dateNaissanceEleve" value="" required />
                </div>
                <div class="row">

                    <label class="col" for="classeEleve">Classe:</label>
                    <select class="col" name="classeEleve" id="classeEleve" required>
                        <?php
                        if (isset($selectClasse)) {

                            for ($i = 0; $i < sizeof($selectClasse); $i++) {
                                echo'<option id=' . $selectClasse[$i]['id_classe'] . ' value=' . $selectClasse[$i]['id_classe'] . '>' . $selectClasse[$i]['nom'] . '</option>';
                            }
                        } else {
                            echo'<option>Il n\'y a aucune classe</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <label class="col" for="etablissementEleve">Etablissement élève:</label>
                    <select class="col" name="etablissementEleve" id="etablissementEleve" >
                        <?php
                        if (isset($selectEtablissement)) {
                            for ($i = 0; $i < sizeof($selectEtablissement); $i++) {
                                echo'<option id=' . $selectEtablissement[$i]['id_etablissement'] . ' value=' . $selectEtablissement[$i]['id_etablissement'] . '>' . $selectEtablissement[$i]['nom'] . '</option>';
                            }
                        } else {
                            echo'<option>Il n\'y a aucun établissement</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="row">
                    <input type="submit" class="form-control form-control-sm col" style="background-color: #dc3545;" value="Supprimer" name="eleve" />
                    <input type="submit"  class="form-control form-control-sm col" value="Modifier" onSubmit="check();" name="eleve" />
                </div> 
            </div>
        </div>
    </form>
    <!--Fin Modification eleve-->
    <!--Début Modifier AVS-->
    <form class="navbar-form navbar-left" role="search" id="modifierAVS" style="display: none;" action="index.php?do=modifier&action=modifierAVS" method="POST">

        <div class="row">   
            <div class ="col">

                <input type="text" id="searchAvs" id="searchAvs" class="form-control" placeholder="Rechercher">

                <select  id="listeAVS" name="Avs[]" onclick="afficherAVS()" multiple>
                    <?php
                                    
                    if (isset($selectAVS)) {
                        for ($i = 0; $i < sizeof($selectAVS); $i++) {
                            echo'<option id=' . $selectAVS[$i]['id_avs'] . ' value=' . $selectAVS[$i]['id_avs'] . '>' . $selectAVS[$i]['nom'] . " " . $selectAVS[$i]['prenom'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div> 



            <div class="col-sm-9">
                <div class="row ">
                    <label class="col" for="nomAVS"> Nom:</label>
                    <input class="col" type="text" id="nomAVS" name="nomAVS" value="" required/>
                </div>  
                <div class=" row">
                    <label class="col" for="prenomAVS">Prénom:</label>
                    <input class="col" type="text" id="prenomAVS" name="prenomAVS"  value="" required />
                </div>
                <div class="row">
                    <label class="col"  for="dateNaissanceAVS">Date de naissance:</label>
                    <input class="col"  type="date" id="dateNaissanceAVS" name="dateNaissanceAVS" value="" required />
                </div>
                <div class="row">
                    <label class="col"  for="emailAVS">Email:</label>
                    <input class="col"  type="email" id="emailAVS" name="emailAVS"  value="" required />
                </div>
                <div class="row">
                    <label class="col" for="eleveAVS">Elève assignés:</label>
                    <select class="col" name="eleveAVS[]" id="eleveAVS" class="form-control" multiple >
                        <?php
                        if (isset($selectEleve)) {
                            for ($i = 0; $i < sizeof($selectEleve); $i++) {
                                echo'<option id=' . $selectEleve[$i]['id_eleve'] . ' value=' . $selectEleve[$i]['id_eleve'] . '>' . $selectEleve[$i]['nom'] . " " . $selectEleve[$i]['prenom'] . '</option>';
                            }
                        } else {
                            echo'<option>Il n\'y a aucun élève</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="row">
                    <input type="submit" class="form-control form-control-sm col" style="background-color: #dc3545;" value="Supprimer" name="AVS" />
                    <input type="submit"  class="form-control form-control-sm col" value="Modifier" name="AVS" />
                </div> 
            </div>
        </div>
    </form>

    <!--Fin Modifier AVS--> 
</div>
</body>
</html>
