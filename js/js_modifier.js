function affEtabModif()
{

    if (document.getElementById('rbEtablissement').checked == true)
    {
        document.getElementById('modifierEtablissement').style.display = "";
        document.getElementById('modifierEleve').style.display = "none";
        document.getElementById('modifierAVS').style.display = "none";
        
    } 
    else if (document.getElementById('rbEleve').checked == true)
    {
       document.getElementById('modifierEtablissement').style.display = "none";
       document.getElementById('modifierEleve').style.display = "";
       document.getElementById('modifierAVS').style.display = "none";   

   }
   else if (document.getElementById('rbAVS').checked == true)
   {
       document.getElementById('modifierEtablissement').style.display = "none";
       document.getElementById('modifierEleve').style.display = "none";
       document.getElementById('modifierAVS').style.display = "";

   }

    

}






