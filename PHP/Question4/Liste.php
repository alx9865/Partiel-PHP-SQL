<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
<?php
        $tableau_utilisateurs = ["gabriel", "paul", "amanda", "josephine"]; //snake_case
        $search = strtolower($_POST);
?>
    <form action="Form.php" method="POST">
                <button type="submit">Retour</button>
            </form>
    </body>
</html>
