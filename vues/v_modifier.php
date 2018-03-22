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
        <div class ="col-5">
            <input  type="radio" name="rb" id="rbEtablissement" checked="true" onclick="affEtabModif();" />
            <label class="radio"  for="rbEtablissement"><h4>Etablissement</h4></label>   
            <input   type="radio" name="rb" id="rbEleve" onclick="affEtabModif();"/>
            <label class="radio"for="rbEleve"><h4>Eleve</h4></label>     
            <input type="radio" name="rb" id="rbAVS" onclick="affEtabModif();" />
            <label class="radio"  for="rbAVS"><h4>AVS</h4></label>
        </div>
        <div class="col">
        </div>

    </div>
    <!--fin Radios Boutons -->
    <!--Début Modifier Etablissement-->
    <form class="navbar-form navbar-left form" role="search" id="modifierEtablissement" action="index.php?do=modifier&action=mofifierEtablissement" method="POST">
        <div class="row col"> 

            <div class ="col">
                <input type="text" id="searchEtablissement" class="form-control" placeholder="search">

                <select id="listeEtablissement" formname="Etablissement[]"  onclick="afficherEtablissement()" multiple>
                    <?php
                    if (isset($selectEtablissement)) {
                        for ($i = 0; $i < sizeof($selectEtablissement); $i++) {
                            echo'<option id=' . $selectEtablissement[$i][id_etablissement] . ' value=' . $selectEtablissement[$i][id_etablissement] . '>' . $selectEtablissement[$i][nom] . '</option>';
                        }
                    } else {
                        echo'<option>Il n\'y a aucun établissement</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="col-sm-9">
                <div class="row ">
                    <label class="col" for="nomEtablissement"><h4> Nom: </h4></label>
                    <input  class="col" type="text" id="nomEtablissement" name="nomEtablissement" value="" required/>
                </div>  
                <div class=" row">
                    <label class="col" for="typeEtablissement"> <h4>Type établissement: </h4></label>
                    <input  class="col" type="text" id="typeEtablissement" name="typeEtablissement" value="" required />
                </div>
                <div class="row">
                    <label  class="col" for="responsableEtablissement"> <h4> Responsable: </h4></label>
                    <input  class="col" type="text" id ="responsableEtablissement" name="responsableEtablissement" value="" required />
                </div>
                <div class="row">
                    <input type="submit" class="form-control form-control-sm col" value="Supprimer" name="supprimerEtab" />
                    <input type="submit"  class="form-control form-control-sm col" value="Modifier" name="modifierEtab" />
                </div>
            </div>
        </div>

    </form>
    <!--Fin Modifier Etablissement-->
    <!--Début Modifier Elève-->
    <form class="navbar-form navbar-left" role="search" id="modifierEleve" style="display: none;" action="index.php?do=modifier&action=modifierEleve" method="POST">

        <div class="row">   
            <div class ="col">

                <input type="text"  class="form-control" id ="searchEleve" placeholder="Search">

                <select id="listeEleve" formname="Eleve[]" onclick="afficherEleve()" multiple>
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
                    <input class="col"type="text" id="dateNaissanceEleve" name="dateNaissanceEleve" value="" required />
                </div>
                <div class="row">

                    <label class="col" for="classeEleve">Classe:</label>
                    <select class="col" name="classeEleve" required>
                        <?php
                        if (isset($selectClasse)) {
                            for ($i = 0; $i < sizeof($selectClasse); $i++) {
                                echo'<option id=' . $selectClasse[$i]['id_classe'] . ' value=' . $selectClasse[$i]['id_classe'] . '>' . $selectEleve[$i]['nom'] . '</option>';
                            }
                        } else {
                            echo'<option>Il n\'y a aucune classe </option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <label class="col" for="etablissementEleve">Etablissement élève:</label>
                    <select class="col" name="etablissementEleve" required>
                        <?php
                        if (isset($selectEtablissement)) {
                            for ($i = 0; $i < sizeof($selectEtablissement); $i++) {
                                echo'<option id=' . $selectEtablissement[$i][id_etablissement] . ' value=' . $selectEtablissement[$i][id_etablissement] . '>' . $selectEtablissement[$i][nom] . '</option>';
                            }
                        } else {
                            echo'<option>Il n\'y a aucun établissement</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="row">
                    <input type="submit" class="form-control form-control-sm col" value="Supprimer" name="supprimerEleve" />
                    <input type="submit"  class="form-control form-control-sm col" value="Modifier" name="modifierEleve" />
                </div> 
            </div>
        </div>
    </form>
    <!--Fin Modification eleve-->
    <!--Début Modifier AVS-->
    <form class="navbar-form navbar-left" role="search" id="modifierAVS" style="display: none;" action="index.php?do=modifier&action=mofifierAVS" method="POST">

        <div class="row">   
            <div class ="col">

                <input type="text" id="searchAvs"  class="form-control" placeholder="Search">

                <select  id="listeAVS" formname="AVS[]" onclick="afficherAVS()" multiple>
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
                    <input class="col" type="text" id="nomAVS" value="" required/>
                </div>  
                <div class=" row">
                    <label class="col" for="prenomAVS">Prénom:</label>
                    <input class="col" type="text" id="prenomAVS" value="" required />
                </div>
                <div class="row">
                    <label class="col"  for="dateNaissanceAVS">Date de naissance:</label>
                    <input class="col"  type="date" id="dateNaissanceAVS" value="" required />
                </div>
                <div class="row">
                    <label class="col"  for="emailAVS">Email:</label>
                    <input class="col"  type="email" id="emailAVS" value="" required />
                </div>
                <div class="row">
                    <label class="col" for="eleveAVS">Elève assignés:</label>
                    <select class="col" name="eleveAVS" class="form-control" multiple required>
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
                    <input type="submit" class="form-control form-control-sm col" value="Supprimer" name="supprimerAVS" />
                    <input type="submit"  class="form-control form-control-sm col" value="Modifier" name="modifierAVS" />
                </div> 
            </div>
        </div>
</div>

</form>     

<!--Fin Modifier AVS--> 





</body>
</html>
