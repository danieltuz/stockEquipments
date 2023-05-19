function activaCatalogos() {
    document.getElementById("menu_inicial").style.display="none";
    document.getElementById("menu_catalogos").style.display="block";
}

function activaEquipos() {
    document.getElementById("menu_inicial").style.display="none";
    document.getElementById("menu_equipos").style.display="block";
}

function activaRegresar() {
    document.getElementById("menu_catalogos").style.display="none";
    document.getElementById("menu_equipos").style.display="none";
    document.getElementById("menu_inicial").style.display="block";
}