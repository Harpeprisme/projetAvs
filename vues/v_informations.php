<div class="center-on-page">

    <h1>Informations</h1>
    <center>
        <input  type="radio" name="rb" id="ibEtablissement" checked="true" onclick="affEtabInfo();" />
        <label class="radio"  for="ibEtablissement">Etablissement</label>
        <input   type="radio" name="rb" id="ibEleve" onclick="affEtabInfo();" />
        <label class="radio"for="ibEleve">Eleve</label>
        <input type="radio" name="rb" id="ibAVS" onclick="affEtabInfo();"/>
        <label class="radio"  for="ibAVS">AVS</label>
    </center>
    
    <select name="test" size="6" multiple="multiple">
        <option>sdsqdqsd</option>
        <option>sdqsdsq</option>
    </select>
     <form name="infoEtablissement"  id="infoEtablissement">
        <select name="nom" size="10">
        <?php
            
            foreach($listEtab as $etab) {
                echo'<option id='.$etab['id'].'>' . $etab['nom'] . '</option>';
            }
            ?>
        </select>
        <br>
    </form>

    <form name="infoEleve"  id="infoEleve" style="display: none;">
        <select name="nom" size="10">
         <?php
            
            foreach($listEleve as $eleve) {
                echo'<option id='.$eleve['id'].'>' . $eleve['nom'] . '</option>';
            }
            ?>
        </select>
        <br>
    </form>

    <form name="infoAVS"  id="infoAVS" style="display: none;">
        <select name="nom" size="10">
         <?php
            
            foreach($listAVS as $AVS) {
                echo'<option id='.$AVS['id'].'>' . $AVS['nom'] . '</option>';
            }
            ?>
        </select>
        <br>
    </form>
</div>

</body>
</html>
