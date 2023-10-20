const botonMostrarPopup = document.getElementById("mostrarPopup");
const botonCerrarPopup = document.getElementById("cerrarPopup");
const popup = document.getElementById("popup");

botonMostrarPopup.addEventListener("click", () => {
    popup.style.display = "block";
});

botonCerrarPopup.addEventListener("click", () => {
    popup.style.display = "none";
});