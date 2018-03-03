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
    <!--fin des rb-->

    <form class="navbar-form navbar-left form" role="search" id="modifierEtablissement" action="index.php?do=modifier&action=mofifierEtablissement" method="POST">
        <div class="row">   
            <div class ="col">

                <input type="text"  class="form-control" placeholder="Search">

                <select  formname="Etablissement[]" multiple>
                    <option>Etab</option>
                </select>
            </div>  


            <div class="col">
                <div class="row ">
                    <label for="nomEtablissement"> Nom:</label>
                </div>  
                <div class=" row">
                    <label for="typeEtablissement">Type établissement:</label>
                </div>
                <div class="row">
                    <label for="responsableEtablissement">Responsable:</label>
                </div>
                <br/> <br /> 
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Supprimer" name="supprimerAVS" />
                    </div>
                </div> 
            </div>


            <div class="col">
                <div class ="row">  

                    <div class="col">  
                        <input type="text" name="nomEtablissement" value="" required/>
                        <br>    
                    </div>    
                </div>

                <div class="row">

                    <div class="col">
                        <input type="text" name="typeEtablissement" value="" required />
                        <br>
                    </div>
                </div>

                <div class="row">   

                    <div class="col">
                        <input type="text" name="responsableEtablissement" value="" required />
                        <br>
                    </div>
                </div>

                <div class="row">   
                    <div class="col">
                        <input type="submit" value="Modifier" name="modifierEtab" />
                    </div>  
                </div>   
            </div>
        </div>
    </form>
    <!--fin modifer etab-->

    <form class="navbar-form navbar-left" role="search" id="modifierEleve" style="display: none;" action="index.php?do=modifier&action=modifierEleve" method="POST">

        <div class ="col">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>


            <select name="Eleve[]" multiple>
                <option>Choisir un eleve</option>
            </select>
            <input type="submit" value="Supprimer" name="supprimerEleve" />
        </div>   
        <div class="col">  </div>

        <div class="col">       
            <div class="row">
                <div class="col">
                    <div class="form">
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
                    <div class="form">
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
                    <div class="form">
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
                    <div class="form">
                        <label for="etablissementEleve">Etablissement:</label>
                        <select name="etablissementEleve" required >
                            <option>Choisir un établissement</option>
                        </select>
                        <br>
                    </div>
                </div>    
            </div> 
            <div class="row">
                <div class="col">
                    <div class="form">
                        <label for="classeEleve">Classe:</label>
                    </div>
                </div>     
                <div class="col">
                    <input type="text" name="classeEleve" value="" required />
                    <br>
                </div>
            </div>     
            <input type="submit" value="Modifier" name="modifierEleve"/>
        </div>  
    </form>

    <!--fin modif eleve-->
    <form class="navbar-form navbar-left" role="search" id="modifierAVS" style="display: none;" action="index.php?do=modifier&action=mofifierEtablissement" method="POST">

        <div class ="col">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>


            <select name="AVS[]" multiple>
                <option>Choisir un Avs</option>
            </select>
            <input type="submit" value="Supprimer" name="supprimerAvs" />
        </div>   
        <div class="col">  </div>

        <div class="col">

            <div class="row">
                <div class="col">
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
                            <option>Choisir Un Eleve</option>
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

    <!--Fin fin--> 





</body>
</html>
