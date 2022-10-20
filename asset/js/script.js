let suggestions = [
    'Abyssin',
    'American curl', 
    'American shorthair',
    'American wirehair',
    'Angora turc',
    'Asian',
    'Australian mist',
    'Balinais',
    'Bengal',
    'Bleu russe',
    'Bobtail américain',
    'Bobtail des Kurilian',
    'Bobtail japonais',
    'Bombay',
    'British longhair',
    'British shorthair',
    'Burmese',
    'Burmilla',
    'Chartreux',
    'Cornish rex',
    'Cymric',
    'Devon rex',
    'Donskoy',
    'German rex',
    'Havana brown',
    'Khao manee',
    'Korat',
    'LaPerm',
    'Manx',
    'Maine coon',
    'Mau égyptien',
    'Munchkin',
    'Neva masquerade',
    'Norvégien',
    'Ocicat',
    'Oriental',
    'Persan',
    'Peterbald',
    'Pixiebob',
    'Ragamuffin',
    'Ragdoll',
    'Sacré de Birmanie',
    'Scottish fold',
    'Scottish straight',
    'Selkirk rex',
    'Seychellois',
    'Siamois',
    'Sibérien',
    'Singapura',
    'Snowshoe',
    'Sokoké',
    'Somali',
    'Sphynx',
    'Tonkinois',
    'Turc de Van',
    'Van kedisi'
]

let tableList = `<!--barre de rechercher avec suggestions-->
                <div class="searchBar">
                    <form autocomplete="off" action="/action_page.php">
                        <div class="autocomplete" style="width:300px;">
                            <input id="myInput" type="text" name="myCountry" placeholder="Country">
                        </div>
                        <input type="submit">
                    </form>
                </div>
                <div class='cards_wrap'>`;

for(i=0; i<suggestions.length; i++)
{
    console.log(i);
    tableList += `<div class='card_item'>
                    <a href='formulaireChat.php?nom=${suggestions[i]}'>
                        <div class='card_inner'>
                            <img class='imgChat' src='asset/img/chat2.png'>
                            <div class='title'> ${suggestions[i]}</div>
                        </div>
                    </a>
                </div>`
}

document.querySelector("#button").onclick = function(){

    const changePage = document.querySelector("#change");
    changePage.innerHTML = tableList;
                            
    changePage.append();
}

function essai(radio) {
    if (radio=="mois") {
        document.getElementById('third').style.display='none';
        document.getElementById('second').style.display='block';
    } else if (radio=="annee") {
        document.getElementById('second').style.display='none';
        document.getElementById('third').style.display='block';
    }
}




// const liens = document.querySelectorAll("img");
// const liensArray = Array.from(liens);
// liensArray.map(lien => lien.addEventListener
// ("click", function(event){
//     event.preventDefault();
//     // console.logo("")
//     location.replace("https://www.google.fr/")
// }));


$(document).ready(function() {
							
    $('#submit').click(function(){
     
     //Get the values
     var age  = $('#age').val();
     var animal = $('#animal').val();
     
     if(age==1) {
        var humain = (age*4)+15;
     } else if(age>=19) {
        var humain = (age*6)-20;
     } else {
        var humain = (age*4)+16;
     }
     
     var resultat = "Votre " + animal + " de " + age + " an(s) aurait " + humain + " an(s) s'il &eacute;tait un humain";
     
    //  $('#results').html(resultat).fadeIn("slow");

    });
});