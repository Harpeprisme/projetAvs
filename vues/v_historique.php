
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
        
                <h1>Historique</h1>
        </div>
        <div class="col"></div>
        </div>
   
 


    <div class="row">
       
        <div class="col">
            <div class="searchbar"> <!--BARRE DE RECHERCHE-->
                <div class="container-1"> <!--CONTAINER-->
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
        
                <select id="annee" class="col-ETAB" name="infoEtablissement" id="" multiple size="20" onClick="getAllAVS();" style="width: 120px;">
                    <?php
                    foreach ($getAllAnnee as $annee) {
                        echo'<option id=' . $annee['annee'] . '>' . $annee['annee'] . '</option>';
                    }
                    ?>
                </select>
       
        </div>
          <div class="col">   
          </div>
            
        <div class="col"></div>
        <!--
       
        
        Colonne numero 2 AVS 
        
        --> 
        <div class="col" name="col-AVS" >
        
            <p class="h3"> 
                AVS
            </p>
                <select class="col-ETAB" name="historiqueavs" id="historiqueavs" multiple size="20" onClick="getEleveAVSParAnnee();" style="width: 120px;">
                    <?php
                    foreach ($getAVSParAnnee as $AVS) {
                        if(isset($_GET['IdAVS']) && $AVS['id_avs'] == $_GET['IdAVS']){
                                echo'<option id=' . $AVS['id_avs'] . ' selected=selected value='.$_GET['annee'].'>' . $AVS['nom'] . ' '.$AVS['prenom'].'</option>';
                        } else{
                                echo'<option id=' . $AVS['id_avs'] . ' value='.$_GET['annee'].'>' . $AVS['nom'] . ' '.$AVS['prenom'].'</option>';
                            }
                    }
                    ?>
                </select>
           
        </div>
        <!--
       
      
       
        -->
       
        <div class="col" id="ibAVS" name="col-AVS">
           
                
        </div>
        <div class="col"></div>
        <!--
        
        Colonne numero 3
        
        -->
        <div class="col" id="ibAVS" name="col-AVS">
           
                <p class="h3"> 
                    Eleve
               </p>
               <select class="col-ETAB" name="infoEtablissement" id="" multiple size="20" style="width: 120px;">
                    <?php
                    foreach ($getEleveAVSParAnnee as $eleve) {
                        echo'<option id=' . $eleve['id'] . '>' . $eleve['nom'] . ' '.$eleve['prenom'].'</option>';
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
