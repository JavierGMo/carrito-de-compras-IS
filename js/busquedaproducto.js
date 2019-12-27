let checkData = (valor)=>{
    if(valor !== undefined && valor !== null && valor.trim() !== ""){
        return true;
    }
    return false;
};
let btn_buscar = document.getElementById("btn-buscar");
let producto = document.getElementById('caja-buscar');
let ajax_url = 'usuarios/leerproductos.php';

let ajax_request = new XMLHttpRequest();


btn_buscar.addEventListener('click', ()=>{
    
    if(!checkData(producto.value)){
        console.log("object");
    }

});