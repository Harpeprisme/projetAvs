
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
    <div class="col">
     
    </div>
    <div class="col-5">
      <input type="radio" name="rb" id="ibEtablissement" <?php if ($paramSelect == 'etab' ) echo 'checked="checked"' ; ?> onclick="affEtabInfo();"/>
            <label class="radio"  for="ibEtablissement"><h4>Etablissement</h4></label>
            <input   type="radio" name="rb" id="ibEleve" <?php if ($paramSelect == 'eleve' ) echo 'checked="checked"' ; ?>  onclick="affEtabInfo();" />
            <label class="radio"for="ibEleve"><h4>Eleve</h4></label>
            <input type="radio" name="rb" id="ibAVS" <?php if ($paramSelect == 'avs' ) {echo 'checked="checked"' ;} ?> onclick="affEtabInfo();"/>
            <label class="radio"  for="ibAVS"><h4>AVS</h4></label>
    </div>
    <div class="col">
    
    </div>
  </div>
    


    <!--***********************************************page informationEtablissement********************************-->
    <div id="infoEtablissement" <?php if ($paramSelect != 'etab' ) echo 'style="display: none;"' ; ?>>
        <div class="row col"> 





           <!-- colonne etablissemrnt-->
           <div class="col" id="ibAVS" name="col-AVS">
            <input type="text" id="searchEtablissement" class="form-control" placeholder="Search"> <!--INPUT-->
            <select id="allEtab" name="infoEtablissement" id="" size="20"  onClick="getEleveAVSParEtab();">
                <?php
                foreach ($allListAVSParEtab as $value) {
                    $listNomAVS = null;
                    $listPrenomAVS = null;
                    $listIdAVS = null;
                        echo'<optgroup label='.$value['nom'].' id=' . $value['id_etablissement'] . ' value=' . $value['id_etablissement'] . '>';
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
             -2px 7px 45px rgba(0,0,0, 0.4);">Etablissements</h3></center>

        <div class="row ">
            <label class ="row" for="nomEtablissement"><h4>Nom:</h4></label>
            <label class ="row" for="nomEtablissement"> <?php if(isset($infoEtab))echo $infoEtab['nom'];?></label>
        </div> 

        <div class="row">
            <label class ="row" for="type_etablissement"><h4>Type d'établissement:</h4></label>
            <label class ="row" for="type_etablissement"> <?php if(isset($infoEtab))echo $infoEtab['type_etablissement'];?></label>
        </div> 

        <div class="row ">
            <label class ="row" for="responsable_etablissement"><h4>Responsable:</h4></label>
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

        <center> 
        <h3 style=" color: black;
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
             -2px 7px 45px rgba(0,0,0, 0.4);">
            AVS Résponsable 
        </h3>
        </center>

     <div class="row">  
        <label for="nomEleve"  class="row" ><h4>Nom:</h4></label> 
        <label for="nomEleve" class="row" ><?php if(isset($infoAVS))echo $infoAVS['nom'];?></label> 
    </div>
    <div class="row ">  
        <label for="prenomEleve"  class="row" ><h4>Prénom:</h4></label>
        <label for="prenomEleve"  class="row"> <?php if(isset($infoAVS))echo $infoAVS['prenom'];?></label>
    </div>
    <div class="row ">  
        <label for="date_naissanceEleve"  class="row" ><h4>Date de naissance :</h4></label>
        <label for="date_naissanceEleve"  class="row" ><?php if(isset($infoAVS))echo $infoAVS['date_naissance']; ?> </label>
    </div>
    <div class="row">  
     <label for="mailEleve"  class="row"><h4>Email:</h4></label>  
     <label for="mailEleve"  class="row" ><?php if(isset($infoAVS))echo $infoAVS['mail'];?></label> 
 </div>

 <div class="row">

    <label class="row"><h6>Liste des élèves:</h6></label>
    
    <div class="col"></div>
    <label class="row"><h6>Liste des Etablissements:</h6></label>
    
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
        
        <input type="text" id="searchEtablissement" class="form-control" placeholder="Search"> <!--INPUT-->
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
             -2px 7px 45px rgba(0,0,0, 0.4);"> Avs Responsable:</h3></center>

     <div class="row">  
        <label for="nomAvs"  class="row" ><h4>Nom:</h4></label> 
        <label for="nomAvs" class="row" ><?php if(isset($infoAVS2))echo $infoAVS2['nom'];?></label> 
    </div>
    <div class="row ">  
        <label for="prenomAvs"  class="row" ><h4>Prénom:</h4></label>
        <label for="prenomAvs"  class="row"> <?php if(isset($infoAVS2))echo $infoAVS2['prenom'];?></label>
    </div>
    <div class="row ">  
        <label for="date_naissanceAvs"  class="row" ><h4>Date de naissance :</h4></label>
        <label for="date_naissanceAvs"  class="row" ><?php if(isset($infoAVS2))echo $infoAVS2['date_naissance'];?></label>
    </div>
    <div class="row">  
     <label for="mailAvs"  class="row"><h4>Email:</h4></label>  
     <label for="mailAvs"  class="row" ><?php if(isset($infoAVS2))echo $infoAVS2['mail'];?></label> 
 </div>
     




 <div class="row">

    <label class="row"><h6>Liste des Etablissements:</h6></label>
    
    <div class="col"></div>
    <label class="row"><h6>Liste des Eleves:</h6></label>
    
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
        
        <input type="text" id="searchEtablissement" class="form-control" placeholder="Search"> <!--INPUT-->
 <select  name="infoEtablissement" id="allEleve" size="20"  onClick="getInfoAVSParEleve()">
                            <?php
                            foreach ($listEleve as $eleve) {
                                if(isset($_GET['IdEleve']) && $eleve['id_eleve'] == $_GET['IdEleve']){
                                    echo'<option id=' . $eleve['id_eleve'] . ' selected="selected" value=' . $eleve['id_eleve'] . '>' . $eleve['nom'] . '</option>';
                                } else{
                                    echo'<option id=' . $eleve['id_eleve'] . ' value=' . $eleve['id_eleve'] . '>' . $eleve['nom'] . '</option>';
                                }
                            }
                            ?>
                        </select>

 </div>


 <div class="col-sm-4"> 

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
             -2px 7px 45px rgba(0,0,0, 0.4);">Elève:</h3></center>

     <div class="row">  
        <label for="nomAvs"  class="row" ><h4>Nom:</h4></label> 
        <label for="nomAvs" class="row" ><?php if(isset($infoEleve))echo $infoEleve['nom'];?></label> 
    </div>
    <div class="row ">  
        <label for="prenomAvs"  class="row" ><h4>Prénom:</h4></label>
        <label for="prenomAvs"  class="row"> <?php if(isset($infoEleve))echo $infoEleve['prenom'];?></label>
    </div>
    <div class="row ">  
        <label for="date_naissanceAvs"  class="row" ><h4>Date de naissance :</h4></label>
        <label for="date_naissanceAvs"  class="row" ><?php if(isset($infoEleve))echo $infoEleve['date_naissance'];?></label>
    </div>
    <div class="row">  
     <label for="Etablissement"  class="row"><h4>Etablissement:</h4></label>  
     <label for="Etablissement"  class="row" ><?php if(isset($EtabEleve))echo $EtabEleve['nom'];?></label> 
 </div>
    <div class="row">  
     <label for="Classe"  class="row"><h4>Classe:</h4></label>  
     <label for="Classe"  class="row" ><?php if(isset($ClasseEleve))echo $ClasseEleve['nom'];?></label> 
 </div>



 </div>
 <div class="col">


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
             -2px 7px 45px rgba(0,0,0, 0.4);"> Avs Responsable:</h3></center>

     <div class="row">  
        <label for="nomAvs"  class="row" ><h4>Nom:</h4></label> 
        <label for="nomAvs" class="row" ><?php if(isset($infoAVS3))echo $infoAVS3['nom'];?></label> 
    </div>
    <div class="row ">  
        <label for="prenomAvs"  class="row" ><h4>Prénom:</h4></label>
        <label for="prenomAvs"  class="row"> <?php if(isset($infoAVS3))echo $infoAVS3['prenom'];?></label>
    </div>
    <div class="row ">  
        <label for="date_naissanceAvs"  class="row" ><h4>Date de naissance :</h4></label>
        <label for="date_naissanceAvs"  class="row" ><?php if(isset($infoAVS3))echo $infoAVS3['date_naissance'];?></label>
    </div>
    <div class="row">  
     <label for="mailAvs"  class="row"><h4>Email:</h4></label>  
     <label for="mailAvs"  class="row" ><?php if(isset($infoAVS3))echo $infoAVS3['mail'];?></label> 
 </div>
     




 <div class="row">

    <label class="row"><h6>Liste des élèves:</h6></label>
    
    <div class="col"></div>
    <label class="row"><h6>Liste des Etablissements:</h6></label>
    
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
