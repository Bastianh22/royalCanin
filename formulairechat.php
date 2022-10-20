        <?php
            require("header.php");
        ?>

        <!--formulaire-->
        <div class="mil">
            <h1 class="h1">Renseignement sur votre chat</h1>
            <form class="form" action="users.php" method="post">
                <div class="txt_field">
                    <input class="inputText" type="text" name="nom" required>
                    <span class="spanText"></span>
                    <label class="labelText">Nom du chat</label>
                </div>

                <!-- bonton radio -->
                <div class="radio">
                    <label class="btn-radio">
                        <input class="input-radio" type="radio" id="radio" name="formulaire" value="mois" onchange="essai(this.value)"/>
                        <span class="span-radio">Mois</span>
                    </label>
                    <label class="btn-radio">
                        <input class="input-radio" type="radio" id="radio" name="formulaire" value="annee" onchange="essai(this.value)"/>
                        <span class="span-radio">Année(s)</span>
                    </label>            
                    <div class="txt_field" id="second" style="display:none">
                        <input class="inputText" id="test" type="number" name="anneeChat" required/>
                        <span class="spanText"></span>
                        <label class="labelText">Ajouter le nombre de mois qu'à votre chat: </label>
                    </div>
                                
                    <div class="txt_field" id="third" style="display:none">
                        <input class="inputText" id="testBis" type="number" name="anneeChat" required/>
                        <span class="spanText"></span>
                        <label class="labelText">Ajouter le nombre d'année(s) qu'à votre chat: </label>
                    </div>
                </div>

                    
                    
                
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