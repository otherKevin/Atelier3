<?php

/* ------------------------- Déclaration des variables -------------------- */
$nom = "titre du site";

$tableauMenu = [
    "Atelier PHP 3" => "https://community.lebocal.academy/student/practice?practiceId=6062ffba50a2e12ab08af620&moduleId=5f4d8a65551e947e4f4f927b&trainingId=5f4d8a09551e947e4f4f9277",
    "Cours" => "https://community.lebocal.academy/private/resources/l6b229ifreg2spkh841634295880690.1.pdf",
    "GitHub" => "https://github.com/"
];

$tableauFooter = [
    "Vue.js" => "https://vuejs.org/guide/introduction.html#what-is-vue",
    "PHP" => "https://www.php.net/"

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
                <?php foreach ($tableau as $name => $link) { ?>
                    <li>
                        <a href="<?php echo $link ?>"> <?php echo $name ?></a>
                    </li>

                <?php } ?>
            </ul>
        </div>



    </div>

<?php } ?>