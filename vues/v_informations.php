

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <center>
                <input type="radio" name="rb" id="ibEtablissement" checked="true" onclick="affEtabInfo();"/>
                <label class="radio"  for="ibEtablissement">Etablissement</label>
                <input   type="radio" name="rb" id="ibEleve"  onclick="affEtabInfo();" />
                <label class="radio"for="ibEleve">Eleve</label>
                <input type="radio" name="rb" id="ibAVS" onclick="affEtabInfo();"/>
                <label class="radio"  for="ibAVS">AVS</label>
            </center>
        </div>
    </div>
</div>
<!--***********************************************page informationEtablissement********************************-->
<div id="infoEtablissement">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-left: 120px;padding-top: 20px;">
                <div class="searchbar"> <!--BARRE DE RECHERCHE-->
                    <div class="container-1"> <!--CONTAINER-->
                        <span class="icon"><img src=https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png class="fa fa-search" width=32></img></span> <!--ICONE DE RECHERCHETITRE-->
                        <input type="search" id="search" placeholder="Rechercher" style="width: 200px;" /> <!--INPUT-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container"  style="width: 1550px;">
        <center>
            <div class="row" style="width: 1300px;">
                <!-- colonne etablissemrnt-->
                <div class="col" id="ibAVS" name="col-AVS" style="">
                    <fieldset style="margin-top: 30px;">
                        <legend>

                        </legend>
                        <select class="col-ETAB" name="infoEtablissement" id="" size="20" style="margin-top: 20px">
                            <?php
                            foreach ($listAVS as $AVS) {
                                echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>
                <!-- colonne AVS-->
                <div name="col-ETAB" class="col" id="ibAVS" style="padding-left: 30px;">
                    <fieldset>
                        <legend> <h3> Informations Etablissemnts </h3></legend>

                        <div class="container-1">
                            <label for="mon_id" style="float: left;">Nom:</label>
                            <br>
                        </div>

                        <div class="container-1"> <!--CONTAINER-->
                            <label for="mon_id" style="float: left;">Type d'établissement:</label>
                            <br>
                        </div>

                        <div class="container-1"> <!--CONTAINER-->
                            <label for="mon_id" style="float: left;">Responsable:</label>
                            <br>
                        </div>

                    </fieldset>
                    <select class="col-AVS"name="infoEtablissement" id="ibAVS" size="10" style="margin-top: 15px;">
                        <?php
                        foreach ($listAVS as $AVS) {
                            echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <!-- colonne ELEVE-->

                <div name="col-ELEVE" class="col" id="ibAVS" style="padding-left: 30px;">
                    <select class="col-ELEVE" name="infoEtablissement" id="ibAVS" size="10" style="margin-top: 235px;">
                        <?php
                        foreach ($listAVS as $AVS) {
                            echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <!-- colonne Etablissemnt2-->

                <div name="col-ELEVE" class="col" id="ibAVS" style="padding-left: 0px;">
                    <fieldset>
                        <legend> <h3> Informations AVS </h3></legend>
                        <div class="container-1">
                            <div class="row justify-content-start">  
                                <label for="mon_id" style="float: left;">Nom:</label>
                                <br>
                            </div>
                        </div>

                        <div class="container-1"> <!--CONTAINER-->
                            <div class="row justify-content-start">  
                                <label for="mon_id" style="float: left;">Prénom:</label>
                                <br>
                            </div>
                        </div>
                        <div class="container-1"> <!--CONTAINER-->
                            <div class="row justify-content-start">  
                                <label for="mon_id" style="float: left;">Date de naissance :</label>
                                <br>
                            </div>
                        </div>
                        <div class="container-1"> <!--CONTAINER-->
                            <div class="row justify-content-start">  
                                <label for="mon_id" style="float: left;">Email:</label>
                                <br>
                            </div>
                        </div>  
                    </fieldset>
                    <fieldset  style="margin-top: 0px;">
                        <legend>
                            <h5>Liste des Etablissemnts</h5>
                        </legend>
                        <select class="col-ETAB2" name="infoEtablissement" id="ibAVS" size="8" style="margin-top: 0px;width:240px;">
                            <?php
                            foreach ($listAVS as $AVS) {
                                echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>
                <!-- colonne ELEVE2-->
                <div name="col-ELEVE" class="col" id="ibAVS" style="padding-left: 10px;">
                    <fieldset style="margin-top:230px; ">
                        <legend>
                            <h5>Liste des éléves</h5>
                        </legend>
                        <select class="col-ELEVE2" name="infoEtablissement" id="ibAVS" size="8" style="margin-top: 0px;width: 240px">
                            <?php
                            foreach ($listAVS as $AVS) {
                                echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>

            </div>
        </center>
    </div>
</div>
<!--**********
            ***************
                        **********************
                                              page informationAVS
                                                                 ***********
                                                                              **************
                                                                                            *******-->
<div id="infoAVS"> 
    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-left: 120px;padding-top: 20px;">
                <div class="searchbar"> <!--BARRE DE RECHERCHE-->
                    <div class="container-1"> <!--CONTAINER-->
                        <span class="icon"><img src=https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png class="fa fa-search" width=32></img></span> <!--ICONE DE RECHERCHETITRE-->
                        <input type="search" id="search" placeholder="Rechercher" style="width: 200px;" /> <!--INPUT-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin:40px 0 0 0;">
        <div class="row">
            <div class="col-4">
                <div class="col" id="" name="col-AVS"  style="margin-left:0px;">
                    <center>
                        <select name="nom" size="20" style="width: 280px;">
                            <?php
                            foreach ($listEleve as $eleve) {
                                echo'<option id=' . $eleve['id'] . '>' . $eleve['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </center>
                </div>
            </div>

            <div class="col-8">

                <div class="row">
                    <div class="col-8">
                        <div class="row" style="margin-top: 0px;">
                            <div class="col-8" style="padding-left:280px;padding-top: 20px;"><center><h2 style="width: 200px;padding-bottom: 50px;">AVS RESPONSABLE</h2></center></div>
                            <div class="w-100"></div>
                            <div class="col-2" style="padding-left: 50px;">
                                <label for='id_Nom' style="float: left;width: 100px;">Nom :</label> 
                            </div>
                            <div class="col-2" style="padding-left: 50px;">
                                <label for='id_Prenom' style="float: left;width: 100px;">Prénom :</label> 
                            </div>

                            <div class="col-1" style="padding-left: 90px;padding-top: 0px;">
                                <label for='id_Ddn' style="float: left;width: 200px;">Date de naissance :</label>     
                            </div>
                            <div class="col-1" style="padding-left: 200px;padding-top: 0px;">
                                <label for='id_Ddn' style="float: left;width: 200px;">Email :</label>     
                            </div>
                        </div>
                    </div>


                    <!-- Force next columns to break to new line -->
                    <div class="w-100"></div>

                    <div class="col-8" mar>

                        <div class="row">
                            <div class="col-4" style="padding-left: 70px;padding-top: 10px;">
                                <select class="col-ELEVE2" name="infoEtablissement" id="ibAVS" size="8" style="margin-top: 0px;width: 240px">
                                    <?php
                                    foreach ($listAVS as $AVS) {
                                        echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="col-4" style="padding-left: 250px;padding-top: 10px;" >
                                <select class="col-ELEVE2" name="infoEtablissement" id="ibAVS" size="8" style="margin-top: 0px;width: 240px">
                                    <?php
                                    foreach ($listAVS as $AVS) {
                                        echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">

        </div>
    </div>
</div>
<!--***********************************************


page informationELEVE



********************************-->

<div id="infoEleve">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-left: 120px;padding-top: 20px;">
                <div class="searchbar"> <!--BARRE DE RECHERCHE-->
                    <div class="container-1"> <!--CONTAINER-->
                        <span class="icon"><img src=https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png class="fa fa-search" width=32></img></span> <!--ICONE DE RECHERCHETITRE-->
                        <input type="search" id="search" placeholder="Rechercher" style="width: 200px;" /> <!--INPUT-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container"  style="width: 1550px;">
        <center>
            <div class="row" style="width: 1300px;">
                <!-- colonne etablissemrnt-->
                <div class="col-2" id="ibAVS" name="col-AVS" style="">
                    <fieldset style="margin-top: 30px;">
                        <legend>

                        </legend>
                        <select class="col-ETAB" name="infoEtablissement" id="" size="20" style="margin-top: 20px">
                            <?php
                            foreach ($listAVS as $AVS) {
                                echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>
                <!-- colonne AVS-->
                <div name="col-ETAB" class="col-2" id="ibAVS" style="padding-left: 30px;margin-top: 30px;">
                    <fieldset>
                        <legend> <h3> Informations Etablissemnts </h3></legend>
                        <div class="container" style="margin-top: 30px;">
                            <div class="row">
                                <div class="col">
                                    <label for="mon_id" style="float: left;">Nom:</label>
                                    <br>
                                </div>

                                <div class="w-100"></div>

                                <div class="col"style="margin-top: 15px;"> <!--CONTAINER-->
                                    <label for="mon_id" style="float: left;">Prénom:</label>
                                    <br>
                                </div>

                                <div class="w-100"></div>

                                <div class="col"> <!--CONTAINER-->
                                    <label for="mon_id" style="float: left;margin-top: 15px;">Date de naissance:</label>
                                    <br>
                                </div>

                                <div class="w-100"></div>

                                <div class="col"> <!--CONTAINER-->
                                    <label for="mon_id" style="float: left;margin-top: 15px;">Etablissement :</label>
                                    <br>
                                </div>

                                <div class="w-100"></div>

                                <div class="col"> <!--CONTAINER-->
                                    <label for="mon_id" style="float: left;margin-top: 15px;">Classe :</label>
                                    <br>
                                </div>
                            </div>  
                        </div>
                    </fieldset>

                </div>
                <!-- colonne ELEVE-->



                <!-- colonne Etablissemnt2-->
                <div class="col-7">                  
                    <div class="col-7" style="padding-left:280px;padding-top: 20px;"><center><h2 style="width: 200px;padding-bottom: 50px;">AVS RESPONSABLE</h2></center></div>

                    <div class="col-8" style="padding-left:0px;padding-top: 20px;">
                        <center>
                            <label for="mon_id" style="float: left;">Nom:</label>
                            <label for="mon_id" style="float: left;">Prénom:</label>
                            <label for="mon_id" style="float: left;">Date de naissance :</label>
                            <label for="mon_id" style="float: left;">Email :</label>
                        </center>
                    </div>
                    
                    <div class="col">
                        <fieldset style="margin-top:50px;float: left;margin-left: 50px; ">
                            <legend>
                                <h5>Liste des éléves</h5>
                            </legend>
                            <select class="col-ELEVE2" name="infoEtablissement" id="ibAVS" size="8" style="margin-top: 0px;width: 240px">
                                <?php
                                foreach ($listAVS as $AVS) {
                                    echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                                }
                                ?>
                            </select>
                        </fieldset>
                        
                    </div>
                    <div class="col">
                         <fieldset style="margin-top:100px; ">
                            <legend>
                                <h5>Liste des éléves</h5>
                            </legend>
                            <select class="col-ELEVE2" name="infoEtablissement" id="ibAVS" size="8" style="margin-top: 0px;width: 240px">
                                <?php
                                foreach ($listAVS as $AVS) {
                                    echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                                }
                                ?>
                            </select>
                    </div>
                </div>

            </div>  
        </center>

    </div>

</div>

</body>
</html>
