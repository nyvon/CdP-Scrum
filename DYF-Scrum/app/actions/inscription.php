<script type="text/javascript">
function verifFormulaire()
  {
    if(document.inscription.login.value.length <= 1){
      alert("Veuillez saisir un login plus long!");
      document.inscription.login.focus();
      return false;
    }

     if(document.inscription.login.value.length >= 20){
      alert("Veuillez saisir un login moins long!");
      document.inscription.login.focus();
      return false;
    }
  }

  function writediv(texte)
    {
      document.getElementById('pseudobox').innerHTML = texte;
    }

    function verifPseudo(pseudo)
    {
      if(pseudo != '')
            {
        if(texte = file('app/actions/verifpseudo.php?pseudo='+escape(pseudo)))
              {
          if(texte == 1)
            writediv('<span style="color:#cc0000"><b>'+pseudo+' :</b> ce pseudo est deja pris</span>');

          else if(texte == 2)
            writediv('<span style="color:#1A7917"><b>'+pseudo+' :</b> ce pseudo est libre</span>');
          else
            writediv(texte);
              }
            }
    }

    function file(fichier)
    {
      if(window.XMLHttpRequest) // FIREFOX
        xhr_object = new XMLHttpRequest();
      else if(window.ActiveXObject) // IE
        xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
      else
        return(false);
      xhr_object.open("GET", fichier, false);
      xhr_object.send(null);
      if(xhr_object.readyState == 4) return(xhr_object.responseText);
      else return(false);
    }
  </script>