<?php
require_once __DIR__ . "./menu.php"
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style.css">

    <title>Atelier 3 : Menu</title>
</head>

<body>

    <header>
        <h1> ATELIER 3 PHP : MENU</h1>

        <?php

        afficher_menu($nom, $tableauMenu);

        ?>
    </header>
    <section id="corpsSite">
        <h2>ICI LE CORPS DU SITE, AVEC DU TEXTE ET TOUT CE QUI VA BIEN :</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam aliquid ad repellat architecto tempore labore sed tenetur natus corrupti necessitatibus, asperiores assumenda quos delectus possimus! Culpa vitae rerum quo sit!</p>
    </section>
    <footer>
        <h3>Footer</h3>

        <?php
        afficher_menu("Références techs :", $tableauFooter);

        ?>
    </footer>

</body>

</html>