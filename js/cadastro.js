function showHideConjuge(elem) {
    var sectionConjuge = document.getElementById("conjuge");
    var navbarConjuge = document.getElementById("navbar-conjuge");
    
    if (elem.value == "casado") {
        sectionConjuge.classList.remove("hidden");
        navbarConjuge.classList.remove("hidden");
        console.log("opção 'casado' selecionado.");
    } else {
        sectionConjuge.classList.add("hidden");
        navbarConjuge.classList.add("hidden");
        console.log("opção 'casado' não selecionado.");
    }
}