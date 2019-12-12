/**Inicio del form del login */
//Para el buscador



//let btn_buscador = document.getElementById('btn-buscador');
let btn_buscador = document.getElementById('caja-buscar');
btn_buscador.addEventListener('keyup', function(e){
    e.preventDefault();
    console.log(btn_buscador.value);
});

/**funciones del login */
/*
btn_buscador.addEventListener('click', function(e){    
    e.preventDefault();
    let ajax = new XMLHttpRequest();
    let request_buscar = document.getElementById('caja-buscar').value;
    let ajax_url = './usuarios/busquedaprod.php';
    ajax_url += `?buscar=${request_buscar}`;
    
    //ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    ajax.onreadystatechange = function() {
        if(ajax.readyState === 4){
            console.log("objectoooo");
            console.log(JSON.parse(ajax.responseText));
        }
        
    };
    ajax.open("GET", ajax_url, true);
    ajax.send();
    console.log("object");
    console.log("sdasd");
});*/