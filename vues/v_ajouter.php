

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
        <div class ="col-5">
            <input  type="radio" name="rb" id="rbEtablissement" checked="true" onclick="affEtab();" />
            <label class="radio"  for="rbEtablissement"><h4>Etablissement</h4></label>   
            <input   type="radio" name="rb" id="rbEleve" onclick="affEtab();"/>
            <label class="radio"for="rbEleve"><h4>Eleve</h4></label>     
            <input type="radio" name="rb" id="rbAVS" onclick="affEtab();" />
            <label class="radio"  for="rbAVS"><h4>AVS</h4></label>
        </div>
        <div class="col">
        </div>
    </div>

    <div class="row">   
        <div class ="col"></div>
        
        <div class ="col">
            <form name="ajouterEtablissement"  id="ajouterEtablissement"  action="index.php?do=ajouter&action=ajouterEtablissement" method="POST">
                <div class="form">
                    <label for="nomEtablissement"><h4> Nom: </h4></label>
                    <input type="text" name="nomEtablissement" value="" required/>
                    <br>
                </div>
                <div class="form">
                    <label for="typeEtablissement"><h4>Type établissement: </h4></label>
                    <input class="form-control" type="text" name="typeEtablissement" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="responsableEtablissement"><h4> Responsable: </h4></label>
                    <input type="text" name="responsableEtablissement" value="" required />
                    <br>
                </div>
                <div class="col">
                    <div class="col"> 
                        <input type="submit" value="Sauvegarder" name="envoyerEtab" />
                    </div>
                </div>
            </form>

            <form name="ajouterEleve" id="ajouterEleve" style="display: none;" action="index.php?do=ajouter&action=ajouterEleve" method="POST">
                <div class="form">
                    <label for="nomEleve"><h4> Nom: </h4></label>
                    <input type="text" name="nomEleve" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="prenomEleve"><h4> Prénom: </h4></label>
                    <input type="text" name="prenomEleve" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="dateNaissanceEleve"><h4>Date de naissance: </h4></label>
                    <br>
                    <input type="date" name="dateNaissanceEleve" value="" required/>
                    <br>
                </div>
                <div class="form">
                    <label for="etablissementEleve"><h4>Etablissement: </h4></label>
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
                     <label for="classeEleve"> <h4>Classe: </h4></label>
                    <input type="text" name="classeEleve" value="" required />
                    <br>
                </div>
                <div class="col">
                    <div class="col"> 
                        <input type="submit" value="Sauvegarder" name="envoyerEleve"/>
                    </div>
                </div>

            </form>

            <form name="ajouterAVS" id="ajouterAVS" style="display: none;" action="index.php?do=ajouter&action=ajouterAVS" method="POST">
                <div class="form">
                    <label for="nomAVS"> <h4>Nom:</h4></label>
                    <input type="text" name="nomAVS" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="PrenomAVS"><h4>Prénom: </h4></label>
                    <input type="text" name="PrenomAVS" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="dateNaissanceAVS"> <h4>Date de naissance: </h4></label>
                    <input type="date" name="dateNaissanceAVS" value="" required />
                    <br>
                </div>
                <div class="form">
                    <label for="emailAVS"> <h4>Email: </h4></label>
                    <input type="email" name="emailAVS" value="" placeholder="xyz@gmail.com" required />
                    <br>
                </div>
                <div class="form">
                    <label for="eleveAssigneAVS"> <H4>Choisir un Elève:</h4></label>
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
