function showHideConjuge(elem) {
    var sectionConjuge = document.getElementById("conjuge");
    var navbarConjuge = document.getElementById("navbar-conjuge");
    
    if(elem.value == "casado"){
        sectionConjuge.classList.remove("hidden");
        navbarConjuge.classList.remove("hidden");
        console.log("opção 'casado' selecionado.");
    }
    else {
        sectionConjuge.classList.add("hidden");
        navbarConjuge.classList.add("hidden");
        console.log("opção 'casado' não selecionado.");
    }
}

function showHideEmprego(elem) {
    var sectionComercial = document.getElementById("endcom");
    var navbarComercial = document.getElementById("navbar-endcom");
    
    if(elem.value == "desempregado"){
        sectionComercial.classList.add("hidden");
        navbarComercial.classList.add("hidden");
        console.log("opção 'desempregado' selecionado.");
    }
    else {
        sectionComercial.classList.remove("hidden");
        navbarComercial.classList.remove("hidden");
        console.log("opção 'desempregado' não selecionado.");
    }
}