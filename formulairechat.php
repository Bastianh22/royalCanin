        <?php
            require("header.php");
        ?>

        <!--formulaire-->
        <div class="mil">
            <h1 class="h1">Inscription</h1>
            <form class="form" action="users.php" method="post">
                <div class="txt_field">
                    <input class="inputText" type="text" name="nom" required>
                    <span class="spanText"></span>
                    <label class="labelText">Nom du chat</label>
                </div>

                <div class="radio">
                    <label class="btn-radio">
                        <input class="input-radio" type="radio" value="mois" onchange="essai(this.value)"/>
                        <span class="span-radio">Mois</span>
                    </label>
                    <label class="btn-radio">
                        <input class="input-radio" type="radio" value="annee" onchange="essai(this.value)">
                        <span class="span-radio">Année(s)</span>
                    </label>
                    <div id="second" style="display:none">
                        Bonjour: <input type="text" id="test"/>
                    </div>
                                
                    <div id="third" style="display:none">
                        Au-revoir: <input type="text" id="testBis"/>
                    </div>
                </div>
                    
                                
                    
                
                <input class="inputText" id="button" type="submit" name="submit" value="Inscription">
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