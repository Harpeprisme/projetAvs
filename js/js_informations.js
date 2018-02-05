function affEtabInfo()
{
   
    if (document.getElementById('ibEtablissement').checked == true)
    {
         console.log("Working");
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