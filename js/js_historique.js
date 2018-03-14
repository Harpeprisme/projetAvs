function getAllAVS(){
    var x = document.getElementById("annee");
    var e = x.options[x.selectedIndex].id;
    console.log('ofzopjfio');
    document.location.href="index.php?do=historique&action=getAllAVS&annee="+e;
}

function getEleveAVSParAnnee(){
    var x = document.getElementById("historiqueavs");
    var e = x.options[x.selectedIndex].id;
    var n = x.options[x.selectedIndex].value;
    document.location.href="index.php?do=historique&action=getEleveAVSParAnnee&IdAVS="+e+"&annee="+n;
}