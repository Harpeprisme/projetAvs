
<div class="container">
    <div class="row">
        <div class="col-xl-12" style="margin-top: 20px;">
            <center>
                <h2>Historique</h2>
            </center>
        </div>
    </div>
</div>
<div class="w-100"></div>
<div class="container">
    <div class="row">
        <div class="col-xl-12" style="padding-left: 120px;padding-top: 20px;">
            <div class="searchbar"> <!--BARRE DE RECHERCHE-->
                <div class="container-1"> <!--CONTAINER-->
                    <span class="icon"><img src=https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png class="fa fa-search" width=32></span> <!--ICONE DE RECHERCHETITRE-->
                    <input type="search" id="search" placeholder="Rechercher" style="width: 200px;" /> <!--INPUT-->
                </div>

            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!--
        
        Colonne numero 1
        
        -->
        <div class="col" id="ibAVS" name="col-AVS" style="margin-left: 115px;">
            <fieldset>
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
        <!--
       
       
       
        -->
        <div class="col" id="ibAVS" name="col-AVS" style="max-width: 230px;">
            <fieldset>
                <legend>
                    <div style="padding-top: 200px;">
                        <span class="icon"><img src=http://constellations.pagesperso-orange.fr/Mes%20images/fl28.gif class="fa fa-search" width=60></span>
                    </div>     
                </legend>

            </fieldset>
        </div>
        <!--
        
        Colonne numero 2 AVS 
        
        --> 
        <div class="col" name="col-AVS" >
            <fieldset style="margin-top: 15px;">
                <legend>
                    <H3 style="margin-left: 80px;">AVS</H3>
                </legend>
                <select class="col-ETAB" name="historiqueavs" id="" size="17" style="margin-top: 20px">
                    <?php
                    foreach ($listAVS as $AVS) {
                        echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                    }
                    ?>
                </select>
            </fieldset>
        </div>
        <!--
       
      
       
        -->
        <div class="col" id="ibAVS" name="col-AVS" style="max-width: 200px;">
            <fieldset>
                <legend>
                     <div style="padding-top: 200px;">
                        <span class="icon"><img src=http://constellations.pagesperso-orange.fr/Mes%20images/fl28.gif class="fa fa-search" width=60></span>
                    </div>   

                </legend>

            </fieldset>
        </div>
        <!--
        
        Colonne numero 3
        
        -->
        <div class="col" id="ibAVS" name="col-AVS" style="">
            <fieldset style="margin-top: 15px;">
                <legend>
                    <H3 style="margin-left: 80px;">Eléve</H3>
                </legend>
                <select class="col-ETAB" name="infoEtablissement" id="" size="17" style="margin-top: 20px">
                    <?php
                    foreach ($listAVS as $AVS) {
                        echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                    }
                    ?>
                </select>
            </fieldset>
        </div>
    </div>
</div>



</body>
</html>
