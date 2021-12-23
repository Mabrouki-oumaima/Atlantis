function valider(){
  var nom1 = document.getElementById('nom').value;
  var prenom1 = document.getElementById('prenom').value;
  var mdp1 = document.getElementById('password').value;
  var mdp2 = document.getElementById('comfirm-password').value;

  if(nom1 == "")
  {
    document.getElementById('msg1').innerHTML="** veuillez saisir le nom **";
    return false;
  }
  if(prenom1 == "")
  {
    document.getElementById('msg2').innerHTML="** veuillez saisir le prenom **";
    return false;
  }

  if (!isNaN(nom1))
  {
    document.getElementById('msg1').innerHTML="** Doit comporter des caractéres seulement **";
    return false;
  }
  if (!isNaN(prenom1))
  {
    document.getElementById('msg2').innerHTML="** Doit comporter des caractéres seulement **";
    return false;
  }
  if ((mdp1.length > 15) || (mdp1.length <8))
  {
    document.getElementById('message1').innerHTML="** le mot de passe doit être entre 8 et 15 **";
    return false;
  }
  if (mdp1 != mdp2)
  {
    document.getElementById('message2').innerHTML="** les mots de passe ne sont pas compatibles **";
    return false;
  } 






}
