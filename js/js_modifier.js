function affEtabModif()
{

    if (document.getElementById('rbEtablissement').checked == true)
    {
        document.getElementById('modifierEtablissement').style.display = "";
        document.getElementById('modifierEleve').style.display = "none";
        document.getElementById('modifierAVS').style.display = "none";

    } else if (document.getElementById('rbEleve').checked == true)
    {
        document.getElementById('modifierEtablissement').style.display = "none";
        document.getElementById('modifierEleve').style.display = "";
        document.getElementById('modifierAVS').style.display = "none";

    } else if (document.getElementById('rbAVS').checked == true)
    {
        document.getElementById('modifierEtablissement').style.display = "none";
        document.getElementById('modifierEleve').style.display = "none";
        document.getElementById('modifierAVS').style.display = "";

    }



}

function afficherEtablissement() {


    var vInfosEtablissement;
    var vOptionSelected = encodeURIComponent(document.getElementById("listeEtablissement").options[document.getElementById("listeEtablissement").selectedIndex].value);


    $.ajax({
        type: 'GET',
        url: "controleurs/c_modifier.php?action=afficherEtablissement&id_etablissement=" + vOptionSelected,
        timeout: 3000,
        async: false,
        dataType: 'json',
        success: function (data)
        {
            vInfosEtablissement = data;
        },
        error: function () {
            console.log("Erreur");
        }
    });

    document.getElementById("nomEtablissement").value = vInfosEtablissement[0]['nom'];
    document.getElementById("typeEtablissement").value = vInfosEtablissement[0]['type_etablissement'];
    document.getElementById("responsableEtablissement").value = vInfosEtablissement[0]['responsable_etablissement'];



}

function afficherEleve() {

    var vafficherEleve;
    var vafficherAppartient;
    var vOptionSelected = encodeURIComponent(document.getElementById("listeEleve").options[document.getElementById("listeEleve").selectedIndex].value);


    $.ajax({
        type: 'GET',
        url: "controleurs/c_modifier.php?action=afficherEleve&id_eleve=" + vOptionSelected,
        timeout: 3000,
        async: false,
        dataType: 'json',
        success: function (data)
        {
            vafficherEleve = data;
        },
        error: function () {
            console.log("Erreur");
        }
    });

    document.getElementById("nomEleve").value = vafficherEleve[0]['nom'];
    document.getElementById("prenomEleve").value = vafficherEleve[0]['prenom'];
    document.getElementById("dateNaissanceEleve").value = vafficherEleve[0]['date_naissance'];


    $.ajax({
        type: 'GET',
        url: "controleurs/c_modifier.php?action=afficherAppartient&id_eleve=" + vOptionSelected,
        timeout: 3000,
        async: false,
        dataType: 'json',
        success: function (data)
        {
            vafficherAppartient = data;
        },
        error: function () {
            console.log("Erreur");
        }
    });

    var etablissementEleve = document.getElementById("etablissementEleve");
    var classeEleve = document.getElementById("classeEleve");

    var cptEtab = etablissementEleve.options.length;
    var cptEleve = classeEleve.options.length;




    if (vafficherAppartient == "") {

//Etablissement
        if (typeof vafficherAppartient[0] == "undefined") {


            if (typeof etablissementEleve.options[cptEtab] == "undefined") {

                if (etablissementEleve.options[cptEtab - 1].value != "NULL") {
                    etablissementEleve.options[cptEtab] = new Option("Aucun Etablissement", "NULL");

                }

                etablissementEleve.value = "NULL";
            }


        } else {
            $("#etablissementEleve option[value='NULL']").remove();
            etablissementEleve.value = vafficherAppartient[0]['id_etablissement'];
        }

//  Classe      
        if (typeof vafficherAppartient[0] == "undefined") {


            if (typeof classeEleve.options[cptEleve] == "undefined") {

                if (classeEleve.options[cptEleve - 1].value != "NULL") {
                    classeEleve.options[cptEleve] = new Option("Aucune classe", "NULL");

                }
                classeEleve.value = "NULL";
            }


        } else {
            $("#classeEleve option[value='NULL']").remove();
            classeEleve.value = vafficherAppartient[0]['id_classe'];
        }




    } else {

        $("#etablissementEleve option[value='NULL']").remove();
        etablissementEleve.value = vafficherAppartient[0]['id_etablissement'];

        $("#classeEleve option[value='NULL']").remove();
        classeEleve.value = vafficherAppartient[0]['id_classe'];
    }






}


function afficherAVS() {

    var vafficherAVS;
    var vafficherEleve;
    var vOptionSelected = encodeURIComponent(document.getElementById("listeAVS").options[document.getElementById("listeAVS").selectedIndex].value);


    $.ajax({
        type: 'GET',
        url: "controleurs/c_modifier.php?action=afficherAVS&id_avs=" + vOptionSelected,
        timeout: 3000,
        async: false,
        dataType: 'json',
        success: function (data)
        {
            vafficherAVS = data;
        },
        error: function () {
            console.log("Erreur");
        }
    });

    document.getElementById("nomAVS").value = vafficherAVS[0]['nom'];
    document.getElementById("prenomAVS").value = vafficherAVS[0]['prenom'];
    document.getElementById("dateNaissanceAVS").value = vafficherAVS[0]['date_naissance'];
    document.getElementById("emailAVS").value = vafficherAVS[0]['mail'];





    $.ajax({
        type: 'GET',
        url: "controleurs/c_modifier.php?action=afficherEleveAvs&id_avs=" + vOptionSelected,
        timeout: 3000,
        async: false,
        dataType: 'json',
        success: function (data)
        {
            vafficherEleve = data;
        },
        error: function () {
            console.log("Erreur");
        }
    });


    if (vafficherEleve != "") {

        var eleveAVS = document.getElementById("eleveAVS");

        for (var i = 0; i < eleveAVS.length; i++) {
           
            eleveAVS.options[i].selected = false;
        }

        for (var i = 0; i < eleveAVS.length ; i++) {

            for (var j = 0; j < vafficherEleve.length ; j++) {

                if (vafficherEleve[j]['id_eleve'] == eleveAVS.options[i].value) {
                    
                    eleveAVS.options[i].selected = true;
                    
                }
            }

        }


    } else {
        alert("Il n'y a pas d'élèves assignés");
    }










}

function check(){ 
    
    if( document.getElementById("classeEleve").value == "NULL" && document.getElementById("etablissementEleve").value == "NULL"){
//         document.getElementById("modifierEleve").submit();
          alert("Il faut obligatoirement remplir la classe ainsi que l'établissement");
      }
    
    
}












