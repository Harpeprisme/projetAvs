
<div class="container">
    
   
    <div class="row">
        <div class="col">
        </div>
        <div class="col">     
            <h1>Modifier</h1>
        </div>  
        <div class="col">
        </div>
    </div>
    
     <div class="row">
         <div class ="col">   
         </div>
             <div class ="col">
        <input  type="radio" name="rb" id="rbEtablissement" checked="true" onclick="affEtabModif();" />
        <label class="radio"  for="rbEtablissement">Etablissement</label>   
        <input   type="radio" name="rb" id="rbEleve" onclick="affEtabModif();"/>
        <label class="radio"for="rbEleve">Eleve</label>     
        <input type="radio" name="rb" id="rbAVS" onclick="affEtabModif();" />
        <label class="radio"  for="rbAVS">AVS</label>
          </div>
         <div class="col">
         </div>
         
     </div>
  
     <div class="row">   
         <div class ="col">
           <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            
          </form>
             <select name="Etablissement[]" multiple>
              <?php
            for ($i = 0; $i < sizeof($listEtablissement); $i++) {
                echo'<option id='.$listEtablissement[$i][id_etablissement].' value='.$listEtablissement[$i][id_etablissement].'>' . $listEtablissement[$i][nom].'</option>';
            }
            ?>
              </select>
              <input type="submit" value="Supprimer" name="supprimerAVS" />
         </div>
         <div class="col"></div>
       
         
         <div class="col">
            
           <div class ="row">  
               <div class ="col"
             <form name="modifierEtablissement"  id="modifierEtablissement"  action="index.php?do=modifier&action=mofifierEtablissement" method="POST">
                 
                 <div class="form"
                    <label for="nomEtablissement"> Nom:</label>
                  </div>  
                 </div>
               <div class="col">  
                    <input type="text" name="nomEtablissement" value="" required/>
                    <br>    
               </div>    
               </div>
              
           <div class="row">
            <div class="col">
               <div class="form"
               <label for="typeEtablissement">Type établissement:</label>
               </div>
            </div> 
            <div class="col">
                <input class="form-control" type="text" name="typeEtablissement" value="" required />
                <br>
            </div>
         </div>
             
         <div class="row">   
        <div class="col">
            <div class="form"
           <label for="responsableEtablissement">Responsable:</label>
         </div>
        </div>   
         <div class="col">
            <input type="text" name="responsableEtablissement" value="" required />
            <br>
             </div>
         </div>
        
        <input type="submit" value="Modifier" name="modifierEtab" />
    </form>
           </div>              
 
     <div class ="col">
           <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            
          </form>
             <select name="Eleve[]" multiple>
              <?php
            for ($i = 0; $i < sizeof($listEleve); $i++) {
                echo'<option id='.$listEleve[$i][id_eleve].' value='.$listEleve[$i][id_etablissement].'>' . $listEleve[$i][nom].'</option>';
            }
            ?>
              </select>
              <input type="submit" value="Supprimer" name="supprimerEleve" />
     </div>   
      <div class="col">  </div>
                   
     <div class="col">       
     <div class="row">
         <div class="col">
        <form name="modifierEleve" id="modifierEleve" style="display: none;" action="index.php?do=modifier&action=modifierEleve" method="POST">
        <div class="form"
        <label for="nomEleve">Nom:</label>
        </div>  
        </div>        
        <div class="col">        
        <input type="text" name="nomEleve" value="" required />
        <br>
        </div>
     </div>

        <div class="row">  
            <div class="col">
                <div class="form"
                <label for="prenomEleve">Prénom:</label>
                </div>
            </div>
                <div class="col">
                <input type="text" name="prenomEleve" value="" required />
                <br>
                </div>
            </div>
       
         
    <div class="row">
        <div class="col">
        <div class="form"
        <label for="dateNaissanceEleve">Date de naissance:</label>
        <br>
        </div>    
        <div class="col">
        <input type="date" name="dateNaissanceEleve" value="" required/>
        <br>
        </div>    
        </div>
     </div>
         
         <div class="row">
             <div class="col">
        <div class="form"
        <label for="etablissementEleve">Etablissement:</label>
        <select name="etablissementEleve" required >
            <option>Choisir un établissement</option>
            <?php
            for ($i = 0; $i < sizeof($listEtab); $i++) {
                echo'<option id='.$listEtab[$i][id_etablissement].' value='.$listEtab[$i][id_etablissement].'>' . $listEtab[$i][nom] . '</option>';
            }
            ?>
        </select>
        <br>
        </div>
        </div>    
         </div> 
         <div class="row">
            <div class="col">
           <div class="form"
           <label for="classeEleve">Classe:</label>
           </div>
            </div>     
           <div class="col">
           <input type="text" name="classeEleve" value="" required />
           <br>
           </div>
        </div>     
        <input type="submit" value="Supprimer" name="envoyerEleve"/>
    </form>
 </div>  
              

 <div class ="col">
           <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            
          </form>
             <select name="AVS[]" multiple>
              <?php
            for ($i = 0; $i < sizeof($listAvs); $i++) {
                echo'<option id='.$listAvs[$i][id_eleve].' value='.$listAvs[$i][id_etablissement].'>' . $listAvs[$i][nom].'</option>';
            }
            ?>
              </select>
              <input type="submit" value="Supprimer" name="supprimerAvs" />
     </div>   
      <div class="col">  </div>
      
      <div class="col">
          
     <div class="row">
       <div class="col">
    <form name="modifierAVS" id="modifierAVS" style="display: none;" action="index.php?do=modifier&action=modifierAVS" method="POST">
        <div class="form"
        <label for="nomAVS">Nom:</label>
         </div>  
       </div>
         <div class="col">
        <input type="text" name="nomAVS" value="" required />
        <br>
        </div>
     </div>
     
       <div class="row">
       <div class="col">
        <div class="form"
        <label for="PrenomAVS">Prénom:</label>
        </div>
       </div>
           <div class="col">   
        <input type="text" name="PrenomAVS" value="" required />
        <br>
        </div>
       </div>
          
        <div class="row">
       <div class="col">
        <div class="form"
        <label for="dateNaissanceAVS">Date de naissance:</label>
        </div>
       </div>
         <div class="col">
        <input type="date" name="dateNaissanceAVS" value="" required />
        <br>
        </div>
        </div>
          
        <div class="row">
       <div class="col">
        <div class="form"
        <label for="emailAVS">Email:</label>
        </div>
       </div>
        <div class="col">
        <input type="email" name="emailAVS" value="" placeholder="xyz@gmail.com" required />
        <br>
        </div>
      </div>
     
       <div class="row">
       <div class="col"> 
        <div class="form"
        <select name="eleveAssigneAVS[]" multiple>
              <?php
              $listEleve= array ();
            for ($i = 0; $i < sizeof($listEleve); $i++) {
                echo'<option id='.$listEleve[$i][id_eleve].' value='.$listEleve[$i][id_eleve].'>' . $listEleve[$i][nom] ." ". $listEleve[$i][prenom] . '</option>';
            }
            ?>
        </select>
        <br>
        <br>
        </div>
       </div>
           <div class="col">
        <input type="submit" value="Modifier" name="modifierAVS" />
        </div>
         </div>
          </div> 
    </form> 
         
     
        
               
</div>
</div>


</body>
</html>
