        <?php
            require("header.php");
        ?>

        <!--formulaire-->
        <div class="mil">
            <h1 class="h1">Renseignement sur votre chat</h1>
            <form class="form" action="resultat.php" method="post">
                <div class="txt_field">
                    <input class="inputText" type="text" name="nomChat" pattern="^\\D[A-z-]*$" required>
                    <span class="spanText"></span>
                    <label class="labelText">Nom du chat</label>
                </div>

                <!-- bonton radio -->
                <div class="radio">
                    <label class="btn-radio">
                        <input class="input-radio" type="radio" name="radio" value="mois" required/>
                        <span class="span-radio">Mois</span>
                    </label>
                    <label class="btn-radio">
                        <input class="input-radio" type="radio" name="radio" value="ans"/>
                        <span class="span-radio">Année(s)</span>
                    </label>              
                    <div class="txt_field">
                        <input class="inputText" type="number" name="ageChat" pattern="^\d+$" required/>
                        <span class="spanText"></span>
                        <label class="labelText">Ajouter le nombre d'année(s) qu'à votre chat: </label>
                    </div>
                </div>
                <input type="hidden" name="nomRace" value="<?= htmlspecialchars($_GET['nom']);?>"/>

                <input class="inputText" id="button" type="submit" name="submit" value="Calculer">
            </form>

            

            <a href="index.php">
                <button class="btn btn-one">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
            </a>
        </div>

        <?php
            require("footer.php");
        ?>