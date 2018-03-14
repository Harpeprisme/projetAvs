
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">

            <h2>Historique</h2>
        </div>
        <div class="col"></div>
    </div>



   

    <div class="col row">
        <!--
        
        Colonne numero 1
        
        --> 
              <div class="col-sm-1"></div>

        <div class="col-sm-2">
            
            <p class="h3 " > Annee</p>
           
           <div class="row">
                <input type="search" class="form-control " id="search" placeholder="Rechercher"  /> <!--INPUT-->
            </div>

            <select id="annee" class="col-ETAB" name="infoEtablissement" id="" multiple size="20" onClick="getAllAVS();">
                <?php
                foreach ($getAllAnnee as $annee) {
                    echo'<option id=' . $annee['annee'] . '>' . $annee['annee'] . '</option>';
                }
                ?>
            </select>

        </div>
        <div class="col-sm-1">   
            <span class="icon"><img src=http://constellations.pagesperso-orange.fr/Mes%20images/fl28.gif  width=60></span>
        </div>

        <div class="col"></div>
        <!--
       
        
        Colonne numero 2 AVS 
        
        --> 
        <div class="col-sm-2" name="col-AVS" >

            <p class="h3"> 
                AVS
            </p>
            <select class="col-ETAB" name="historiqueavs" id="historiqueavs" multiple size="24" onClick="getEleveAVSParAnnee()">
                <?php
                foreach ($getAVSParAnnee as $AVS) {
                    if (isset($_GET['IdAVS']) && $AVS['id_avs'] == $_GET['IdAVS']) {
                        echo'<option id=' . $AVS['id_avs'] . ' selected=selected value=' . $_GET['annee'] . '>' . $AVS['nom'] . ' ' . $AVS['prenom'] . '</option>';
                    } else {
                        echo'<option id=' . $AVS['id_avs'] . ' value=' . $_GET['annee'] . '>' . $AVS['nom'] . ' ' . $AVS['prenom'] . '</option>';
                    }
                }
                ?>
            </select>

        </div>
        <!--
       
      
       
        -->

        <div class="col-sm-1" id="ibAVS" name="col-AVS">

            <legend>
                <span class="icon"><img src=http://constellations.pagesperso-orange.fr/Mes%20images/fl28.gif  width=60 alt="Responsive image"></span>

            </legend>
        </div>
        <div class="col"></div>
        <!--
        
        Colonne numero 3
        
        -->
        <div class="col-sm-2" id="ibAVS" name="col-AVS">

            <p class="h3"> 
                Eleve
            </p>
            <select class="col-ETAB" name="infoEtablissement" id="" multiple size="24">
                <?php
                foreach ($getEleveAVSParAnnee as $eleve) {
                    echo'<option id=' . $eleve['id'] . '>' . $eleve['nom'] . ' ' . $eleve['prenom'] . '</option>';
                }
                ?>
            </select>

        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>

</div>






</body>
</html>
