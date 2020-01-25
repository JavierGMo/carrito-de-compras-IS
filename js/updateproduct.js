let id_prod = window.location.search.split("?")[1];

id_prod = id_prod.split('=')[1];
let btn_update_producto = document.getElementById('btn-update-producto');

let id_producto_up = document.getElementById('id_product');
let nombre_producto_up = document.getElementById('nombre_producto_usuario_update');
let precio_producto_up = document.getElementById('precio_producto_usuario_update');
let descripcion_producto_up = document.getElementById('desc_producto_usuario_update');

let respuesta;
let ajax_url = './usuarios/actualizar.php';
ajax_url += `?id=${id_prod}`;


let ajax_request = new XMLHttpRequest();
ajax_request.onreadystatechange = function() {

    if (ajax_request.readyState === 4 ) {
        
        respuesta = JSON.parse(ajax_request.responseText);
        nombre_producto_up.value = respuesta.nombre;
        precio_producto_up.value = respuesta.precio;
        descripcion_producto_up.value = respuesta.descripcion;
        alertify.alert('Actualizacion de producto', `${respuesta.nombre} es el producto`);
        console.log(respuesta);
    }
}
ajax_request.open("GET", ajax_url, true);
ajax_request.send();

console.log("no ya hiciste click");
btn_update_producto.addEventListener('click', function(e){
        e.preventDefault();
        console.log("ya hiciste click");
        let ajax_URL = './usuarios/actualizar.php';
        let paramet = `id=${id_prod}
                        &nombre=${nombre_producto_up.value}
                        &precio=${precio_producto_up.value}
                        &descripcion=${descripcion_producto_up.value}`;
        
        
        let ajax_req = new XMLHttpRequest();
        ajax_req.onreadystatechange = function(){
            if(ajax_req.readyState === 4){
                alertify.alert("OK", "producto agregado");
            }else if(ajax_req.readyState === 5){
                alertify.alert("No", "producto no agregado, intente de nuevo");
            }
        }
        ajax_req.open("POST", ajax_URL, true);
        ajax_req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax_req.send(paramet);
});