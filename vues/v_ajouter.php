

<div class="center-on-page">

    <h1>Ajouter</h1>
    <center>
        <input  type="radio" name="rb" id="rbEtablissement" checked="true" onclick="affEtab();" />
        <label class="radio"  for="rbEtablissement">Etablissement</label>
        <input   type="radio" name="rb" id="rbEleve" onclick="affEtab();" />
        <label class="radio"for="rbEleve">Eleve</label>
        <input type="radio" name="rb" id="rbAVS" onclick="affEtab();"/>
        <label class="radio"  for="rbAVS">AVS</label>
    </center>

    <form name="ajouterEtablissement"  id="ajouterEtablissement"  action="../index.php?do=ajouter&action=ajouterEtablissement" method="POST">
        <label for="nomEtab">Nom:</label>
        <input type="text" name="nomEtab" value="" required/>
        <br>
        <label for="typeEtablissement">Type établissement:</label>
        <input type="text" name="typeEtablissement" value="" required />
        <br>
        <label for="responsableEtab">Responsable:</label>
        <input type="text" name="responsableEtab" value="" required />
        <br>
        <input type="submit" value="Sauvegarder" name="envoyerEtab" />
    </form>

    <form name="ajouterEleve" id="ajouterEleve" style="display: none;" action="../index.php?do=ajouter&action=ajouterEleve" method="POST">
        <label for="nomEleve">Nom:</label>
        <input type="text" name="nomEleve" value="" required />
        <br>
        <label for="prenomEleve">Prénom:</label>
        <input type="text" name="prenomEleve" value="" required />
        <br>
        <label for="dateNaissanceEleve">Date de naissance:</label>
        <br>
        <input type="date" name="dateNaissanceEleve" value="" required/>
        <br>
        <label for="etablissementEleve">Etablissement:</label>
        <select name="etablissementEleve" required >
            <option>Choisir un établissment</option>
            <option>Etablissement1</option>
            <option>Etablissement2</option>
        </select>
        <br>
        <label for="classeEleve">Classe:</label>
        <input type="text" name="classeEleve" value="" required />
        <br>

        <input type="submit" value="Sauvegarder" name="envoyerEleve" />
    </form>

    <form name="ajouterAVS" id="ajouterAVS" style="display: none;" action="../index.php?do=ajouter&action=ajouterAVS" method="POST">
        <label for="nomAVS">Nom:</label>
        <input type="text" name="nomAVS" value="" required />
        <br>
        <label for="PrenomAVS">Prénom:</label>
        <input type="text" name="PrenomAVS" value="" required />
        <br>
        <label for="dateNaissanceAVS">Date de naissance:</label>
        <input type="date" name="dateNaissanceAVS" value="" required />
        <br>
        <label for="emailAVS">Email:</label>
        <input type="email" name="emailAVS" value="" placeholder="xyz@gmail.com" required />
        <br>
        <select name="eleveAssigneAVS" multiple>
            <option>Eleve1</option>
            <option>Eleve2</option>
            <option>Eleve3</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Sauvegarder" name="envoyerAVS" />
    </form>

</div>

</body>
</html>
