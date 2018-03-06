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

//création des options classe
//    select = document.getElementById('listeEtablissement');
//
//
//    for (i = 0; i < vInfosEtablissement.length; i++) {
//        select.options[i] = null;
//    }
//
//    for (var i = 0; i <= vInfosEtablissement.length; i++) {
//        var opt = document.createElement('option');
//        opt.value = vInfosEtablissement[i]['id_etablissement'];
//        opt.innerHTML = vInfosEtablissement[i]['nom'];
//        select.appendChild(opt);
//    }


}


function afficherAVS() {

    var vafficherAVS;
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

//création des options classe
//    select = document.getElementById('listeEtablissement');
//
//
//    for (i = 0; i < vInfosEtablissement.length; i++) {
//        select.options[i] = null;
//    }
//
//    for (var i = 0; i <= vInfosEtablissement.length; i++) {
//        var opt = document.createElement('option');
//        opt.value = vInfosEtablissement[i]['id_etablissement'];
//        opt.innerHTML = vInfosEtablissement[i]['nom'];
//        select.appendChild(opt);
//    }


}









