<?php

/* ------------------------- Déclaration des variables -------------------- */
$nom = "titre du site";

$tableauMenu = [
    "lien1" => '<a href="https://community.lebocal.academy/student/practice?practiceId=6062ffba50a2e12ab08af620&moduleId=5f4d8a65551e947e4f4f927b&trainingId=5f4d8a09551e947e4f4f9277">Atelier 3</a>',
    "lien2" => '<a href="https://community.lebocal.academy/private/resources/l6b229ifreg2spkh841634295880690.1.pdf">Le Cours</a>',
    "lien3" => '<a href="https://github.com/">GitHub</a>'
];

$tableauFooter = [
    "lien1" => '<a href="https://vuejs.org/guide/introduction.html#what-is-vue">Vue.js</a>',
    "lien2" => '<a href="https://www.php.net/">PHP(HP)</a>'

];

/* ------------------------ Déclaration des fonctions ------------------------ */
function afficher_menu($nom, $tableau)
{ ?>
    <div class="divMenu">
        <div class="divNom">
            <p> <?php echo $nom ?> </p>
        </div>

        <div class="divTableau">
            <ul class="liste">
                <?php foreach ($tableau as $index => $value) { ?>
                    <li> <?php echo $value ?> </li>

                <?php } ?>
            </ul>
        </div>



    </div>

<?php } ?>