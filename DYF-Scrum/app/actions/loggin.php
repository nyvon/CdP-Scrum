<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="connection Form">
    <meta name="author" content="@FANE">
    

    <title>Connexion</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/logginCSS.css">
          
   
  </head>
  <body>
    <div class="container">

      <form class="form-signin" id="connexion" name ="loggin" method="post" action="index.php?action=connexion">
        <h2 class="form-signin-heading"><b><center>Connectez-Vous ! </center></b></h2>
        <input type="text" class="form-control" placeholder="pseudo " required autofocus name ="pseudo" id="pseudo">
        <input type="password" class="form-control" placeholder="Password" required  name="pwd" id="pwd">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="send" value ="send">Connexion</button>
      </form>
    </div>
    
  </body>
</html>
