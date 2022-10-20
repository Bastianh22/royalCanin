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

            $ageAnnee = array(
                "1" => "15 ans",
                "2" => "24 ans",
                "3" => "28 ans",
                "4" => "32 ans",
                "5" => "36 ans",
                "6" => "40 ans",
                "7" => "44 ans",
                "8" => "48 ans",
                "9" => "52 ans",
                "10" => "56 ans",
                "11" => "60 ans",
                "12" => "64 ans",
                "13" => "68 ans",
                "15" => "72 ans",
                "16" => "76 ans",
                "17" => "80 ans",
                "18" => "84 ans",
                "19" => "88 ans",
                "20" => "94 ans",
                "21" => "96 ans"
            );

            $age ='';

            // boucle pour rechercher l'age humain correspondent à l'age du chat rentre
            if($unite == 'ans')
            {
                foreach($ageAnnee as $clef => $valeur)
                {
                    if($clef == $ageChat)
                    {
                        $age = $valeur;
                    }
                }
            }
            else
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
        </div>

        <?php
            require("footer.php");
        ?>