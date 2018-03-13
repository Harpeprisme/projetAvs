
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
        
                <h2>Historique</h2>
        </div>
        <div class="col"></div>
        </div>
   
 


    <div class="row">
       
        <div class="col">
            <div class="searchbar"> <!--BARRE DE RECHERCHE-->
                <div class="container-1"> <!--CONTAINER-->
                    <span class="icon"><img src=https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png class="fa fa-search" width=32></span> <!--ICONE DE RECHERCHETITRE-->
                    <input type="search" id="search" placeholder="Rechercher" style="width: 200px;" /> <!--INPUT-->
                </div>

            </div>

        </div>
         <div class="col"></div>
        <div class="col"></div>
    </div>

    <div class="row">
        <!--
        
        Colonne numero 1
        
        -->
        
        <div class="col">
           
               <p class="h3"> Annee
               </p>
        
                <select class="col-ETAB" name="infoEtablissement" id="" multiple size="20">
                    <?php
                    foreach ($listAVS as $AVS) {
                        echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                    }
                    ?>
                </select>
       
        </div>
          <div class="col">   
              <span class="icon"><img src=http://constellations.pagesperso-orange.fr/Mes%20images/fl28.gif class="fa fa-search" width=60></span>
          </div>
            
        <div class="col"></div>
        <!--
       
        
        Colonne numero 2 AVS 
        
        --> 
        <div class="col" name="col-AVS" >
        
            <p class="h3"> 
                AVS
            </p>
                <select class="col-ETAB" name="historiqueavs" id="" multiple size="20">
                    <?php
                    foreach ($listAVS as $AVS) {
                        echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
                    }
                    ?>
                </select>
           
        </div>
        <!--
       
      
       
        -->
       
        <div class="col" id="ibAVS" name="col-AVS">
           
                <legend>
                        <span class="icon"><img src=http://constellations.pagesperso-orange.fr/Mes%20images/fl28.gif class="fa fa-search" width=60 alt="Responsive image"></span>
                   
                </legend>
        </div>
        <div class="col"></div>
        <!--
        
        Colonne numero 3
        
        -->
        <div class="col" id="ibAVS" name="col-AVS">
           
                <p class="h3"> 
                    Eleve
               </p>
                <select class="col-ETAB" name="infoEtablissement" id="" multiple size="20">
                    <?php
                    foreach ($listAVS as $AVS) {
                        echo'<option id=' . $AVS['id'] . '>' . $AVS['nom'] . '</option>';
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
