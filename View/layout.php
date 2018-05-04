<!-- Layout --> 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../style.css" />
        <title><?=$page?></title>
    </head>
    <body>
        <?=$erreur?>
        <?php include($page.'.php'); ?> 
    </body>
</html>