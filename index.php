        <?php
            require("header.php");
        ?>
            <!-- contenue de page qui sera modifier lors du click sur le bonton calculer -->
            <div id="change">
                <div class="center">
                    <button class="btn btn-one" id="button">
                        Calcule l'âge humain de votre chat
                    </button>
                </div>
                <br><br>

                <div class="center">
                    <span class="spanDescrib"> La bonne nutrition santé pour votre chaton</span>
                    <div class="describ">
                        Chaque chaton est spécial et a des besoins nutritionnels différents. C'est pourquoi il convient de<br>
                        tenir compte de leur race, de leur âge, de leur sensibilité et de leur mode de vie lorsqu'il s'agit de<br>
                        choisir la bonne nourriture. En utilisant les filtres de cette page, vous pouvez trouver la nourriture<br>
                        la plus appropriée pour votre chaton
                    </div>
                </div>         
                
                <div>
                    <span class="spanDescrib">
                        Le bon aliment pour votre chat :
                    </span>
                </div>
                <!-- card alimentation chat -->

                <div class='cards_wrap'>
                    <div class='card_item'>
                        <a href="https://www.royalcanin.com/fr/shop/kitten-pour-chaton-2522">
                            <div class='card_inner'>
                                <img class="imgProduit" src='asset/img/chat.webp'>
                                <div class='title'>Kitten pour chaton</div>
                                <div class='description'>
                                    <p>
                                        Aliment sec pour chats<br>
                                        à partir de<br>
                                        <span id='prix'>24,99 €</span><br>
                                        En stock
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card_item">
                        <a href="https://www.royalcanin.com/fr/shop/sterilised-37-2537">
                            <div class="card_inner">
                                <img class="imgProduit" src="asset/img/FR_129114_master.webp">
                                <div class="title">Sterilised 37</div>
                                <div class="description">
                                    <p>
                                        Aliment sec pour chats<br>

                                        à partir de<br>
                                        <span id='prix'>22,50 €</span><br>
                                        En stock
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card_item">
                        <a href="https://www.royalcanin.com/fr/shop/chaton-maine-coon-2558">
                            <div class="card_inner">
                                <img class="imgProduit" src="asset/img/FR_129088_master.webp">
                                <div class="title">Chaton Maine Coon</div>
                                <div class="description">
                                    <p>
                                        Aliment sec pour chats<br>

                                        à partir de<br>
                                        <span id='prix'>26,10 €</span><br>
                                        En stock
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card_item">
                        <a href="https://www.royalcanin.com/fr/shop/chaton-british-shorthair-2566">
                            <div class="card_inner">
                                <img class="imgProduit" src="asset/img/FR_129086_master.webp">
                                <div class="title">Chaton British Shorthair</div>
                                <div class="description">
                                    <p>
                                        Aliment sec pour chats<br>

                                        à partir de<br>
                                        <span id='prix'>26,10 €</span><br>
                                        En stock
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <?php
                require("footer.php");
            ?>

        