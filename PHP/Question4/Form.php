<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Question 4</title>
    </head>
    <body>
        <form action="Liste.php" method="POST">
        <label for="nom">nom :</label>
        <input type="string" name="nom">
            <button type="submit">Valider</button>
        </form>
    </body>
    <?php
       $tableau_utilisateurs = ["gabriel", "paul", "amanda", "josephine",];
    ?>
</html>