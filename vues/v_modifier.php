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
    <form class="navbar-form navbar-left form" role="search" id="modifierEtablissement" action="index.php?do=modifier&action=mofifierEtablissement" method="POST">
        <div class="row col"> 

            <div class ="col">
                <input type="text" id="searchEtablissement" class="form-control" placeholder="Search">

                <select id="listeEtablissement" formname="Etablissement[]" multiple>
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
                    <label class="col" for="nomEtablissement"> Nom:</label>
                    <input  class="col" type="text" name="nomEtablissement" value="" required/>
                </div>  
                <div class=" row">
                    <label class="col" for="typeEtablissement">Type établissement:</label>
                    <input  class="col" type="text" name="typeEtablissement" value="" required />
                </div>
                <div class="row">
                    <label  class="col" for="responsableEtablissement">Responsable:</label>
                    <input  class="col" type="text" name="responsableEtablissement" value="" required />
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

                <select id="listeEleve" formname="Eleve[]" multiple>
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
                    <input class="col" type="text" name="nomEleve" value="" required/>
                </div>  
                <div class="row">
                    <label class="col" for="prenomEleve">Prenom:</label>
                    <input class="col" type="text" name="prenomEleve" value="" required />
                </div>
                <div class="row">
                    <label class="col" for="dateNaissanceEleve">Date de naissance:</label>
                    <input class="col"type="text" name="dateNaissanceEleve" value="" required />
                </div>
                <div class="row">

                    <label class="col" for="classeEleve">Classe:</label>
                    <select class="col" name="classeEleve" required>
                        <option>Choisir une classe</option>
                    </select>
                </div>
                <div class="row">
                    <label class="col" for="etablissementEleve">Etablissement élève:</label>
                    <select class="col" name="etablissementEleve" required>
                        <option>Choisir un établissement</option>
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

                <select  id="listeAVS" formname="AVS[]" multiple>
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
                    <input class="col" type="text" name="nomAVS" value="" required/>
                </div>  
                <div class=" row">
                    <label class="col" for="prenomAVS">Prénom:</label>
                    <input class="col" type="text" name="prenomAVS" value="" required />
                </div>
                <div class="row">
                    <label class="col"  for="emailAVS">Email:</label>
                    <input class="col"  type="email" name="emailAVS" value="" required />
                </div>
                <div class="row">
                    <label class="col" for="eleveAVS">Elève assignés:</label>
                    <select class="col" name="eleveAVS" class="form-control" multiple required>
                        <option>Choisir un Elève</option>
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
