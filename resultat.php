        <?php
            require("header.php");

            $nomChat = htmlspecialchars($_POST['nomChat']); // recupere le nom du chat mis par l'utilisateur
            $unite = htmlspecialchars($_POST['radio']); // recupere l'unite (année/ mois)
            $ageChat = htmlspecialchars($_POST['ageChat']); // recupere l'âge du chat mis par l'utilisateur
            $nomRace = htmlspecialchars($_POST['nomRace']); // recupere la race du chat selectionner precedemment

            //tableau avec les age des chat correspondant à l'age humain
            $ageMois = array(
                "1" => "6 mois",
                "2" => "3 ans",
                "3" => "5 ans",
                "4" => "7 ans",
                "6" => "10 ans",
                "7" => "12 ans",
                "12" => "15 ans",
                "18" => "21 ans"
            );

            if($ageChat>1 and $unite == 'ans')
            {
                $age = 24+(($ageChat-2)*4) .' ans';
            }

            // boucle pour rechercher l'age humain correspondent à l'age du chat rentre
            if($unite == 'mois')
            {
                foreach($ageMois as $clef => $valeur)
                {
                    if($clef == $ageChat)
                    {
                        $age = $valeur;
                    }
                }
            }
            
        ?>

        <div class="mil">
            <h1 class="h1">
                <?= $nomChat?>
            </h1>
            <div class="center">
                <span>
                    Race: <?= $nomRace?>
                </span>
            </div>
            <div class="center">
                <span>
                    Age de votre chat: <?= $ageChat ." ". $unite?>
                </span>
            </div>
            <div class="center">
                <span>
                    Age de votre chat en humain: <?= $age?>
                </span>
            </div>
            <a href="formulaireChat.php?nom=<?= $nomRace?>">
                <button class="btn btn-one">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
            </a>
        </div>

        <?php
            require("footer.php");
        ?>