document.querySelector("#button").onclick = function(){

    const changePage = document.querySelector("#change");
    changePage.innerHTML = "<!--barre de rechercher avec suggestions-->"
                            +"<div class='wrapper'>"
                                +"<div class='search-input'>"
                                    +"<input type='text' placeholder='Rechercher...'>"
                                    +"<div class='autocom-box'>"
                                        +"<li>login</li>"
                                        +"<li>html</li>"
                                        +"<li>javascript</li>"
                                        +"<li>freelancer</li>"
                                        +"<li>web designer</li>"
                                    +"</div>"
                                    +"<div class='icon'><i class='fas fa-search'></i></div>"
                                +"</div>"
                            +"</div>"
                            +"<div class='card'>"
                                +"<a href='https://www.royalcanin.com/fr/shop/kitten-pour-chaton-2522'>"
                                    +"<div class='card-image'>"
                                        +"<img src='asset/img/202204191209452526.webp'/>"
                                    +"</div>"
                                    
                                    +"<div class='card-body'>"
                                    
                                        +"<div class='card-title'>"
                                            +"<h3>"
                                                +"Kitten pour chaton"
                                            +"</h3>"
                                        +"</div>"
                                        
                                        +"<div class='card-excerpt'>"
                                            +"<p>"
                                                +"Aliment sec pour chats<br>"

                                                +"à partir de<br>"
                                                +"<span id='prix'>24,99 €</span><br>"
                                                +"En stock"
                                            +"</p>"
                                        +"</div>"
                                        
                                    +"</div>"
                                +"</a>"
                            +"</div>"
                            +"<script src='asset/js/scearchbar.js'></script>"
                            +"<script src='asset/js/suggestion.js'></script>";
    changePage.append();
}