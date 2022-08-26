/**barra de opciones */

function agregar_seccion() {
    document.getElementById("desplegar1").style.display = "block";
    document.getElementById("desplegar").style.display = "none";
    
}

function cerrar_seccion() {
    document.getElementById("desplegar1").style.display = "none";
    document.getElementById("desplegar").style.display = "block";

}

/**barra de productos */
function Productos() {
    document.getElementById("producto").style.display = "flex";
    document.getElementById("usuariosl").style.display = "none";
    document.getElementById("pedidos").style.display = "none";
}
function carrito() {
    document.getElementById("carrito").style.display = "flex";
    
    document.getElementById("usuariosl").style.display = "none";
    
}
function desple() {

    document.getElementById("desplegar").style.display = "block";
}

function close() {
    document.getElementById("desplegar").style.display = "none";
}




function tabUser() {
    document.getElementById("usuariosl").style.display = "block";
    document.getElementById("producto").style.display = "none";
    document.getElementById("pedidos").style.display = "none";
}

function closeProd() {
    document.getElementById("productovista").style.display = "none";
}



function nuev_produc() {
    document.getElementById("add_product").style.display = "block";
    document.getElementById("desplegar").style.display = "none";
}
function cerrar_Nproduc() {
    document.getElementById("add_product").style.display = "none";
   
}

function nuev_ped() {
    document.getElementById("pedidos").style.display = "block";
    document.getElementById("producto").style.display = "none";
    document.getElementById("usuariosl").style.display = "none";
}













function abr_elim() {
    document.getElementById("desplegar").style.display = "none";
    document.getElementById("elim_secciones").style.display = "block";
    
}
function close_elim() {
    document.getElementById("elim_secciones").style.display = "none";
    
    
}
