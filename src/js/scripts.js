document.getElementById("")
function afficherFormulaireEdit() {
    cacherInfos();
    const formEdit = document.getElementById("formEdit");

}

function cacherFormulaireEdit() {
    afficherInfos();
}

function afficherInfos() {
    document.getElementById("formInfo").hidden = false;
}

function cacherInfos() {
    document.getElementById("formInfo").hidden = true;
}