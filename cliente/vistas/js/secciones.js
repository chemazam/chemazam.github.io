function Productos() {
    document.getElementById("producto").style.display = "flex";
    document.getElementById("carrito").style.display = "none";
    document.getElementById("pedidos").style.display = "none";
}
function carrito() {
    document.getElementById("carrito").style.display = "flex";
    document.getElementById("producto").style.display = "none";
    document.getElementById("pedidos").style.display = "none";
    
}
function pedds() {
    document.getElementById("pedidos").style.display = "flex";
    document.getElementById("carrito").style.display = "none";
    document.getElementById("producto").style.display = "none";
    
}
