function showHideEmprego(elem) {
    var sectionComercial = document.getElementById("endcom");
    var navbarComercial = document.getElementById("navbar-endcom");
    
    if (elem.value == "desempregado") {
        sectionComercial.classList.add("hidden");
        navbarComercial.classList.add("hidden");
        console.log("opção 'desempregado' selecionado.");
    } else {
        sectionComercial.classList.remove("hidden");
        navbarComercial.classList.remove("hidden");
        console.log("opção 'desempregado' não selecionado.");
    }
}