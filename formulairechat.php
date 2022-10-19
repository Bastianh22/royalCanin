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
                
                <input class="inputText" id="button" type="submit" name="submit" value="Inscription">
            </form>
        </div>

        <button class="btn btn-one">
            <a href="index.php">
                <img src="asset/img/arrow-left-solid.svg"/>
            </a>
        </button>

        <?php
            require("footer.php");
        ?>