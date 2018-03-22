
<div class="container">



    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <h1>Informations</h1>
        </div>  
        <div class="col">
        </div>
    </div>


    <div class="row">
        <div class ="col">   
        </div>
        <div class ="col">
            <input type="radio" name="rb" id="ibEtablissement" <?php if ($paramSelect == 'etab' ) echo 'checked="checked"' ; ?> onclick="affEtabInfo();"/>
            <label class="radio"  for="ibEtablissement">Etablissement</label>
            <input   type="radio" name="rb" id="ibEleve" <?php if ($paramSelect == 'eleve' ) echo 'checked="checked"' ; ?>  onclick="affEtabInfo();" />
            <label class="radio"for="ibEleve">Eleve</label>
            <input type="radio" name="rb" id="ibAVS" <?php if ($paramSelect == 'avs' ) {echo 'checked="checked"' ;} ?> onclick="affEtabInfo();"/>
            <label class="radio"  for="ibAVS">AVS</label>
        </div>
        <div class="col">
        </div>
    </div>


    <!--***********************************************page informationEtablissement********************************-->
    <div id="infoEtablissement" <?php if ($paramSelect != 'etab' ) echo 'style="display: none;"' ; ?>>
        <div class="row col"> 





           <!-- colonne etablissemrnt-->
           <div class="col" id="ibAVS" name="col-AVS">
            <input type="text" id="searchEtablissement" class="form-control" placeholder="Rechercher"> <!--INPUT-->
            <select id="allEtab" name="infoEtablissement" id="" size="20"  onClick="getEleveAVSParEtab();">
                <?php
                foreach ($allListAVSParEtab as $value) {
                            //affiche les Etablissment
                        echo'<optgroup label='.$value['nom'].' id=' . $value['id_etablissement'] . ' value=' . $value['id_etablissement'] . '>';
                         $listNomAVS = null;
                         $listPrenomAVS = null;
                         $listIdAVS = null;
                        if($value['listIdAVS'] != null){
                            $listNomAVS = explode(",", $value['listNomAVS']);
                            $listPrenomAVS = explode(",", $value['listPrenomAVS']);
                            $listIdAVS = explode(",", $value['listIdAVS']);
                        }
                        //Affiche les AVS qui appartienne à l'établissement
                        for($i = 0; $i < sizeof($listIdAVS); $i++){
                            /*if(isset($_GET['IdAVS']) && $listIdAVS[$i] == $_GET['IdAVS']){
                                echo'<option id=' . $listIdAVS[$i] . ' selected="selected" value=' . $value['id_etablissement'] . '>' . $listNomAVS[$i] . ' '.$listPrenomAVS[$i].'</option>';
                            } else{*/
                                echo'<option id=' . $listIdAVS[$i] . ' value=' . $value['id_etablissement'] . '>' . $listNomAVS[$i] . ' '.$listPrenomAVS[$i].'</option>';
                          //  }
                        }
                        echo '</optgroup>';
                  }
              ?>
          </select>




      </div>
      <!-- colonne ELEVE-->

      <div name="col-ELEVE" class="col">
        <center><h3>Informations</h3></center>

        <div class="row ">
            <label class ="row" for="nomEtablissement">Nom:</label>
            <label class ="row" for="nomEtablissement"> <?php if(isset($infoEtab))echo $infoEtab['nom'];?></label>
        </div> 

        <div class="row">
            <label class ="row" for="type_etablissement">Type d'établissement:</label>
            <label class ="row" for="type_etablissement"> <?php if(isset($infoEtab))echo $infoEtab['type_etablissement'];?></label>
        </div> 

        <div class="row ">
            <label class ="row" for="responsable_etablissement">Responsable:</label>
            <label class ="row" for="responsable_etablissement"><?php if(isset($infoEtab))echo $infoEtab['responsable_etablissement'];?></label>
        </div> 

        <select class="row" name="infoEtablissement" id="ibAVS" size="13 ">
            <?php
            foreach ($listEleveParEtab as $eleve) {
                echo'<option id=' . $eleve['id_eleve'] . '>' . $eleve['nom'] . '</option>';
            }
            ?>
        </select>
    </div>

    <!-- colonne Etabl-->


    <!-- colonne Etablissemnt2-->

    <div name="col-ELEVE" class="col">

     <h3> Informations AVS </h3>

     <div class="row">  
        <label for="nomEleve"  class="row" >Nom:</label> 
        <label for="nomEleve" class="row" ><?php if(isset($infoAVS))echo $infoAVS['nom'];?></label> 
    </div>
    <div class="row ">  
        <label for="prenomEleve"  class="row" >Prénom:</label>
        <label for="prenomEleve"  class="row"> <?php if(isset($infoAVS))echo $infoAVS['prenom'];?></label>
    </div>
    <div class="row ">  
        <label for="date_naissanceEleve"  class="row" >Date de naissance :</label>
        <label for="date_naissanceEleve"  class="row" ><?php if(isset($infoAVS))echo $infoAVS['date_naissance']; ?> </label>
    </div>
    <div class="row">  
     <label for="mailEleve"  class="row">Email:</label>  
     <label for="mailEleve"  class="row" ><?php if(isset($infoAVS))echo $infoAVS['mail'];?></label> 
 </div>

 <div class="row">

    <label class="row">Liste des Etablissements:</label>
    
    <div class="col"></div>
    <label class="row">Liste des Elèves:</label>
    
</div>


<div class="row ">


    <select class="col" name="infoEtablissement" id="ibAVS" size="8">
        <?php
        foreach ($getAVSEtab2 as $etab) {
            echo'<option id=' . $etab['id_etablissement'] . '>' . $etab['nom'] . '</option>';
        }
        ?>
    </select>

    <div class="col-sm-1">

    </div>

    <select  class="col" name="infoEtablissement" id="ibAVS" size="8">
        <?php
        foreach ($getAVSEleve2 as $eleve) {
            echo'<option id=' . $eleve['id_eleve'] . '>' . $eleve['nom'] . '</option>';
        }
        ?>
    </select>

</div>

</div>

</div>
</div>
<!--*********************************************** page informationAVS *********** *********************-->


<div id="infoAVS" <?php if ($paramSelect != 'avs' ) echo 'style="display:none;"' ; ?>> 


   <div class="row col"> 


       <!-- colonne etablissemrnt-->
       <div class="col" id="ibAVS" name="col-AVS">
        
        <input type="text" id="searchEtablissement" class="form-control" placeholder="Rechercher"> <!--INPUT-->
 <select id="allAVS" name="nom" size="20" onClick="getEtabEleveParAVS()">
                            <?php
                            foreach ($listAVS as $avs) {
                                if(isset($_GET['IdAVS']) && $avs['id_avs'] == $_GET['IdAVS']){
                                            echo'<option id=' . $avs['id_avs'] . ' selected="selected" value=' . $avs['id_avs'] . '>' . $avs['nom'] . '</option>';
                                        } else{
                                            echo'<option id=' . $avs['id_avs'] . ' value=' . $avs['id_avs'] . '>' . $avs['nom'] . '</option>';
                                        }
                            }
                            ?>
                        </select>

 </div>


 <div class="col-sm-4"> </div>
 <div class="col">
 <center><h3> Avs Responsable:</h3></center>

     <div class="row">  
        <label for="nomAvs"  class="row" >Nom:</label> 
        <label for="nomAvs" class="row" ><?php if(isset($infoAVS2))echo $infoAVS2['nom'];?></label> 
    </div>
    <div class="row ">  
        <label for="prenomAvs"  class="row" >Prénom:</label>
        <label for="prenomAvs"  class="row"> <?php if(isset($infoAVS2))echo $infoAVS2['prenom'];?></label>
    </div>
    <div class="row ">  
        <label for="date_naissanceAvs"  class="row" >Date de naissance :</label>
        <label for="date_naissanceAvs"  class="row" ><?php if(isset($infoAVS2))echo $infoAVS2['date_naissance'];?></label>
    </div>
    <div class="row">  
     <label for="mailAvs"  class="row">Email:</label>  
     <label for="mailAvs"  class="row" ><?php if(isset($infoAVS2))echo $infoAVS2['mail'];?></label> 
 </div>
     




 <div class="row">

    <label class="row">Liste des Etablissements:</label>
    
    <div class="col"></div>
    <label class="row">Liste des Eleves:</label>
    
</div>


<div class="row ">


     <select class="col" name="infoEtablissement"  size="8" >
                        <?php
                        foreach ($getAVSEtab as $etab) {
                            echo'<option id=' . $etab['id_etablissement'] . '>' . $etab['nom'] . '</option>';
                        }
                        ?>
                    </select>

    <div class="col-sm-1">

    </div>

   <select class="col" name="infoEtablissement" id="ibAVS" size="8" >
                        <?php
                        foreach ($getAVSEleve as $eleve) {
                            echo'<option id=' . $eleve['id_eleve'] . '>' . $eleve['nom'] . '</option>';
                        }
                        ?>
                    </select>

</div>
   

       

 </div>
                    

</div>
</div>
<!--***********************************************


page informationELEVE



********************************-->

<div id="infoEleve" <?php if ($paramSelect != 'eleve' ) echo 'style="display:none;"' ; ?>>


<div class="row col"> 


       <!-- colonne etablissemrnt-->
       <div class="col" id="ibAVS" name="col-AVS">
        
        <input type="text" id="searchEtablissement" class="form-control" placeholder="Rechercher"> <!--INPUT-->
 <select  name="infoEtablissement" id="allEleve" size="20"  onClick="getInfoAVSParEleve()">
                            <?php
                            foreach ($listEleve as $eleve) {
                                if(isset($_GET['IdEleve']) && $eleve['id_eleve'] == $_GET['IdEleve']){
                                    echo'<option id=' . $eleve['id_eleve'] . ' selected="selected" value=' . $eleve['id_avs'] . '>' . $eleve['nom'] . '</option>';
                                } else{
                                    echo'<option id=' . $eleve['id_eleve'] . ' value=' . $eleve['id_avs'] . '>' . $eleve['nom'] . '</option>';
                                }
                            }
                            ?>
                        </select>

 </div>


 <div class="col-sm-4"> 

<center><h3> Informations Elève:</h3></center>

     <div class="row">  
        <label for="nomAvs"  class="row" >Nom:</label> 
        <label for="nomAvs" class="row" ><?php if(isset($infoEleve))echo $infoEleve['nom'];?></label> 
    </div>
    <div class="row ">  
        <label for="prenomAvs"  class="row" >Prénom:</label>
        <label for="prenomAvs"  class="row"> <?php if(isset($infoEleve))echo $infoEleve['prenom'];?></label>
    </div>
    <div class="row ">  
        <label for="date_naissanceAvs"  class="row" >Date de naissance :</label>
        <label for="date_naissanceAvs"  class="row" ><?php if(isset($infoEleve))echo $infoEleve['date_naissance'];?></label>
    </div>
    <div class="row">  
     <label for="Etablissement"  class="row">Etablissement:</label>  
     <label for="Etablissement"  class="row" ><?php if(isset($EtabEleve))echo $EtabEleve['nom'];?></label> 
 </div>
    <div class="row">  
     <label for="Classe"  class="row">Classe:</label>  
     <label for="Classe"  class="row" ><?php if(isset($ClasseEleve))echo $ClasseEleve['nom'];?></label> 
 </div>



 </div>
 <div class="col">


 <center><h3> Avs Responsable:</h3></center>

     <div class="row">  
        <label for="nomAvs"  class="row" >Nom:</label> 
        <label for="nomAvs" class="row" ><?php if(isset($infoAVS3))echo $infoAVS3['nom'];?></label> 
    </div>
    <div class="row ">  
        <label for="prenomAvs"  class="row" >Prénom:</label>
        <label for="prenomAvs"  class="row"> <?php if(isset($infoAVS3))echo $infoAVS3['prenom'];?></label>
    </div>
    <div class="row ">  
        <label for="date_naissanceAvs"  class="row" >Date de naissance :</label>
        <label for="date_naissanceAvs"  class="row" ><?php if(isset($infoAVS3))echo $infoAVS3['date_naissance'];?></label>
    </div>
    <div class="row">  
     <label for="mailAvs"  class="row">Email:</label>  
     <label for="mailAvs"  class="row" ><?php if(isset($infoAVS3))echo $infoAVS3['mail'];?></label> 
 </div>
     




 <div class="row">

    <label class="row">Liste des Etablissements:</label>
    
    <div class="col"></div>
    <label class="row">Liste des Elèves:</label>
    
</div>


<div class="row ">


    <select class="col"  name="infoEtablissement" id="ibAVS" size="8" >
                                <?php
                                foreach ($getAVSEtab as $etab) {
                                    echo'<option id=' . $etab['id_etablissement'] . '>' . $etab['nom'] . '</option>';
                                }
                                ?>

                            </select>

    <div class="col-sm-1">

    </div>

 <select class="col" name="infoEtablissement" id="ibAVS" size="8" >
                            <?php
                            foreach ($getAVSEleve as $eleve) {
                                echo'<option id=' . $eleve['id_eleve'] . '>' . $eleve['nom'] . '</option>';
                            }
                            ?>
                      </select>

</div>
   

       

 </div>
                    

</div>









                        



                                   






                                             



                            


                  </div>
</body>
</html>
