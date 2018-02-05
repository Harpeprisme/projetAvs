function affEtab()
{

    if (document.getElementById('rbEtablissement').checked == true)
    {
        document.getElementById('ajouterEtablissement').style.display = "";
        document.getElementById('ajouterEleve').style.display = "none";
        document.getElementById('ajouterAVS').style.display = "none";
        
    } 
    else if (document.getElementById('rbEleve').checked == true)
    {
       document.getElementById('ajouterEtablissement').style.display = "none";
       document.getElementById('ajouterEleve').style.display = "";
       document.getElementById('ajouterAVS').style.display = "none";

   }
   else if (document.getElementById('rbAVS').checked == true)
   {
       document.getElementById('ajouterEtablissement').style.display = "none";
       document.getElementById('ajouterEleve').style.display = "none";
       document.getElementById('ajouterAVS').style.display = "";

   }

    

}
