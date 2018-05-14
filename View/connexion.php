<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/convention.css">
        <link rel="stylesheet" href="css/footer.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
         
        <title>Junior Entreprise - Application de Gestion - JE </title>
    </head>
  
    <body>

        <div>
            <form id="connexion" method="POST" action="../Controller/FrontController.php">
                <label for="exempleUsername">Identifiant</label>
                <input type="user" name="username" placeholder="Votre Identifiant">
                <label for="exemplePassword">Mot de Passe</label>
                <input type="password" class="form-control" name="password" placeholder="Votre Mot de passe">
                <button type="submit" name="btnConnexion">Connexion</button>
            </form>
        </div>
        <div>
            <form id="mdpOublier" method="POST" action="../Controller/OubliemdpController.php">
                <button type="submit" name="btnOubliemdp">Mot de passe oublié</button>
            </form>
        </div>
        </body>
 </html>