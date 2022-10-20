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
                <div class='wrapper'>
                    <div class='search-input'>
                        <input class='inputSearch' id='auto' type='text' placeholder='Rechercher...'>
                        <div class='autocom-box'>
                            <li>login</li>
                            <li>html</li>
                            <li>javascript</li>
                            <li>freelancer</li>
                            <li>web designer</li>
                        </div>
                        <div class='icon'><i class='fas fa-search'></i></div>
                    </div>
                </div>
                <script src="asset/js/searchbar.js"></script>
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


let age_chat = {
    "1" : "19",
    "2" : "24",
    "3" : "28",
    "4" : "32",
    "5" : "36",
    "6" : "40",
    "7" : "44",
    "8" : "48",
    "9" : "52",
    "10" : "56",
    "11" : "60",
    "12" : "64",
    "13" : "68",
    "15" : "72",
    "16" : "76",
    "17" : "80",
    "18" : "84",
    "19" : "88",
    "20" : "94",
};

