
<div class="container">
    <div class="row">
        <div class="col">
            
        </div>
        <div class="col">
            <h1>Historique</h1>
        </div>
        <div class="col">
            
        </div>
    </div>

    <div class="col row">
        <!--
        
        Colonne numero 1
        
        --> 
        <div class="col-sm-1"></div>

        <div class="col-sm-2">

            <p class="h3 " ><center><h3 style="color: black;
	font-size: 30px;
	font-weight: bolder;
	text-align: center;
	text-shadow: 0 1px 0 #eee,
             0 2px 0 #e5e5e5,
             -1px 3px 0 #C8C8C8,
             -1px 4px 0 #C1C1C1,
             -2px 5px 0 #B9B9B9,
             -2px 6px 0 #B2B2B2,
             -2px 7px 2px rgba(0,0,0, 0.6),
             -2px 7px 8px rgba(0,0,0, 0.2),
             -2px 7px 45px rgba(0,0,0, 0.4);">Année</h3></center></p>

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
<!--            <span class="icon"><img src=http://constellations.pagesperso-orange.fr/Mes%20images/fl28.gif  width=60></span>-->
        </div>

        <div class="col"></div>
        <!--
       
        
        Colonne numero 2 AVS 
        
        --> 
        <div class="col-sm-2" name="col-AVS" >

            <p> 
               <center><h3 style="color: black;
	font-size: 30px;
	font-weight: bolder;
	text-align: center;
	text-shadow: 0 1px 0 #eee,
             0 2px 0 #e5e5e5,
             -1px 3px 0 #C8C8C8,
             -1px 4px 0 #C1C1C1,
             -2px 5px 0 #B9B9B9,
             -2px 6px 0 #B2B2B2,
             -2px 7px 2px rgba(0,0,0, 0.6),
             -2px 7px 8px rgba(0,0,0, 0.2),
             -2px 7px 45px rgba(0,0,0, 0.4);">AVS</h3></center> 
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
                <!--<span class="icon"><img src=http://constellations.pagesperso-orange.fr/Mes%20images/fl28.gif  width=60 alt="Responsive image"></span>-->

            </legend>
        </div>
        <div class="col"></div>
        <!--
        
        Colonne numero 3
        
        -->
        <div class="col-sm-2" id="ibAVS" name="col-AVS">

            <p> 
                <center><h3 style="color: black;
	font-size: 30px;
	font-weight: bolder;
	text-align: center;
	text-shadow: 0 1px 0 #eee,
             0 2px 0 #e5e5e5,
             -1px 3px 0 #C8C8C8,
             -1px 4px 0 #C1C1C1,
             -2px 5px 0 #B9B9B9,
             -2px 6px 0 #B2B2B2,
             -2px 7px 2px rgba(0,0,0, 0.6),
             -2px 7px 8px rgba(0,0,0, 0.2),
             -2px 7px 45px rgba(0,0,0, 0.4);">Elève</h3></center>
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
