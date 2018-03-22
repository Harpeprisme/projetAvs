

<div class="container">


    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <h1>Ajouter</h1>
        </div>  
        <div class="col">
        </div>
    </div>  

    <div class="row">
        <div class ="col">   
        </div>
        <div class ="col">
            <input  type="radio" name="rb" id="rbEtablissement" checked="true" onclick="affEtab();" />
            <label class="radio"  for="rbEtablissement">Etablissement</label>   
            <input   type="radio" name="rb" id="rbEleve" onclick="affEtab();"/>
            <label class="radio"for="rbEleve">Eleve</label>     
            <input type="radio" name="rb" id="rbAVS" onclick="affEtab();" />
            <label class="radio"  for="rbAVS">AVS</label>
        </div>
        <div class="col">
        </div>
    </div>

    <div class="row">   
        <div class ="col"></div>
        
        <!--Page Etablissement -->
        <div class ="col">
            <form name="ajouterEtablissement"  id="ajouterEtablissement"  action="index.php?do=ajouter&action=ajouterEtablissement" method="POST">
                <div class="form">
                    <label for="nomEtablissement">Nom:</label>
                    <input type="text" name="nomEtablissement" value="" required/>
                    <br>
                </div>
                <div class="form">
                    <label for="typeEtablissement">Type établissement:</label>
                    <input class="form-control" type="text" name="typeEtablissement" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="responsableEtablissement">Responsable:</label>
                    <input type="text" name="responsableEtablissement" value="" required />
                    <br>
                </div>
                <div class="col">
                    <div class="col"> 
                        <input type="submit" value="Sauvegarder" name="envoyerEtab" />
                    </div>
                </div>
            </form>
            <!-- Fin ajout etablissement -->
            
             <!--Page Eleve -->
            <form name="ajouterEleve" id="ajouterEleve" style="display: none;" action="index.php?do=ajouter&action=ajouterEleve" method="POST">
                <div class="form">
                    <label for="nomEleve">Nom:</label>
                    <input type="text" name="nomEleve" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="prenomEleve">Prénom:</label>
                    <input type="text" name="prenomEleve" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="dateNaissanceEleve">Date de naissance:</label>
                    <br>
                    <input type="date" name="dateNaissanceEleve" value="" required/>
                    <br>
                </div>
                <div class="form">
                    <label for="etablissementEleve">Etablissement:</label>
                    <select name="etablissementEleve" required >
                        <option>Choisir un établissement</option>
                        <?php
                        for ($i = 0; $i < sizeof($listEtab); $i++) {
                            echo'<option id=' . $listEtab[$i][id_etablissement] . ' value=' . $listEtab[$i][id_etablissement] . '>' . $listEtab[$i][nom] . '</option>';
                        }
                        ?>
                    </select>
                    <br>
                </div>
                <div class="form"
                     <label for="classeEleve">Classe:</label>
                    <input type="text" name="classeEleve" value="" required />
                    <br>
                </div>
                <div class="col">
                    <div class="col"> 
                        <input type="submit" value="Sauvegarder" name="envoyerEleve"/>
                    </div>
                </div>

            </form>
           <!-- Fin ajout etablissement -->  
            
            <!--Page AVS-->
            <form name="ajouterAVS" id="ajouterAVS" style="display: none;" action="index.php?do=ajouter&action=ajouterAVS" method="POST">
                <div class="form">
                    <label for="nomAVS">Nom:</label>
                    <input type="text" name="nomAVS" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="PrenomAVS">Prénom:</label>
                    <input type="text" name="PrenomAVS" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="dateNaissanceAVS">Date de naissance:</label>
                    <input type="date" name="dateNaissanceAVS" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="emailAVS">Email:</label>
                    <input type="email" name="emailAVS" value="" placeholder="xyz@gmail.com" required />
                    <br>
                </div>
                <div class="form">
                    <label for="eleveAssigneAVS">Choisir un Elève:</label>
                    <select name="eleveAssigneAVS[]" id ="eleveAssigneAVS" class="form-control" multiple>
                        <?php
                        if (isset($listEleve)) {
                            for ($i = 0; $i < sizeof($listEleve); $i++) {
                                echo'<option id=' . $listEleve[$i]['id_eleve'] . ' value=' . $listEleve[$i]['id_eleve'] . '>' . $listEleve[$i]['nom'] . " " . $listEleve[$i]['prenom'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                    <br>
                    <br>
                </div>
                <!-- Fin ajout AVS --> 
                <div class="col">
                    <div class="col"> 
                        <input type="submit" value="Sauvegarder" name="envoyerAVS" />
                    </div>
                </div>
            </form>

        </div>
        <div class="col">

        </div>
    </div>
</div>

</body>
</html>
