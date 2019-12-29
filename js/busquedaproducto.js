let checkData = (valor)=>{
    if(valor !== undefined && valor !== null && valor.trim() !== ""){
        return true;
    }
    return false;
};
let btn_buscar = document.getElementById("btn-buscar");






btn_buscar.addEventListener('click', (e)=>{
    e.preventDefault();
    let producto = document.getElementById('caja-buscar');
    if(!checkData(producto.value)){
        let ajax_request = new XMLHttpRequest();
        let ajax_url = `usuarios/leerproductos.php?p=${producto.value}`;
        ajax_request.onreadystatechange = ()=>{
            if(ajax_request.readyState === 4){
                try {
                    let resultado = JSON.parse(ajax_request.responseText);
                    let div_productos = document.getElementById('cont-productos');
                    let elemento_creado = document.createElement('div');
                    (elemento_creado.appendChild(document.createElement('div').appendChild(document.createElement('p')))).innerHTML = resultado[0].nombre;
                } catch (error) {
                    throw new Error("No se puede parsear a JSON");
                }

            }
        };
        ajax_request.open("GET", ajax_url, true);
    }

});