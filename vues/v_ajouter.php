<input type="radio" name="Etablissement" value="Etablissement" checked="checked" />
<label for="Etablissement">Etablissement</label>
<input type="radio" name="eleve" value="Eleve" disabled="disabled" />
<label for="eleve">Eleve</label>
<input type="radio" name="avs" value="AVS" disabled="disabled" />
<label for="avs">AVS</label>
<br>


<form name="ajouterEtablissement" action="../index.php?do=ajouter&action=ajouterEtablissement" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="" />
    <br>
    <label for="typeEtablissement">Type établissement:</label>
    <input type="text" name="typeEtablissement" value="" />
    <br>
    <label for="responsable">Responsable:</label>
    <input type="text" name="responsable" value="" />
    <br>
    <input type="submit" value="Sauvegarder" name="envoyer" />
</form>

</body>


<style>
   
</style>
</body>
</html>
