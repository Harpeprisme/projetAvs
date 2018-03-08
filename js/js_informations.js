function getEleveAVSParEtab(param)
{
   if(param == 'true'){
      var m = document.getElementById("AVSByEtab");
      var n = m.options[m.selectedIndex].id;
      document.location.href="index.php?do=informations&action=getEleveAVSEtab&AVSByEtab="+n;
   } else {
        var x = document.getElementById("allEtab");
        var e = x.options[x.selectedIndex].value;
       document.location.href="index.php?do=informations&action=getEleveAVSEtab&IdEtab="+e;
   }
   
}

function getInfoAVSParEleve()
{
   var x = document.getElementById("allEleve");
   var e = x.options[x.selectedIndex].value;
   var s = x.options[x.selectedIndex].id;
   console.log("value = "+ e);
   document.location.href="index.php?do=informations&action=getInfoAVSParEleve&IdAVS="+e+"&IdEleve="+s;
}

function getEtabEleveParAVS()
{
   var x = document.getElementById("allAVS");
   var e = x.options[x.selectedIndex].id;
 
   console.log("value = "+ e);
   document.location.href="index.php?do=informations&action=getEtabEleveParAVS&IdAVS="+e;
}


function affEtabInfo()
{
    if (document.getElementById('ibEtablissement').checked == true)
    {
        document.getElementById('infoEtablissement').style.display = "";
        document.getElementById('infoEleve').style.display = "none";
        document.getElementById('infoAVS').style.display = "none";
        
    } 
    else if (document.getElementById('ibEleve').checked == true)
    {
         document.getElementById('infoEtablissement').style.display = "none";
        document.getElementById('infoEleve').style.display = "";
        document.getElementById('infoAVS').style.display = "none";

    }
     else if (document.getElementById('ibAVS').checked == true)
    {
         document.getElementById('infoEtablissement').style.display = "none";
        document.getElementById('infoEleve').style.display = "none";
        document.getElementById('infoAVS').style.display = "";

    }

}

function changeSelectOption(param){
    console.log('sekjfhzekngf');
    if(param == 'eleve'){
        document.getElementById('ibEleve').checked = true;
    } 
    else if (param == 'etablissement') {
        document.getElementById('ibEtablissement').checked = true;
    }
    else if (param == 'avs') {
        document.getElementById('ibAVS').checked = true;
    }
    affEtabInfo();
    }