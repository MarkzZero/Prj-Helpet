var search = document.getElementById('#pesquisa');

function verificarTecla(event) {
    if (event.key === "Enter") {
        searchData();
    }

}
function searchData(){
    window.location = 'campanhas.php?search='+search.value;
}