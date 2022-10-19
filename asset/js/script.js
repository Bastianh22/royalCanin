document.querySelector("#button").onclick = function(){

    const changePage = document.querySelector("#change");
    changePage.innerHTML = "<h1>Hello my friend!</h1>";
    changePage.append();
}