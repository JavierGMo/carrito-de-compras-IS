let searching_prod = document.getElementById('caja-buscar');
let products_random;
let p_negrita;
let p_descripcion;


searching_prod.addEventListener('keyup', function(e){
    //console.log(searching_prod.value);
    let divj = document.createElement('div');;
    let parafj = document.createElement('p');
    let ajax_url = `./usuarios/busquedaprod.php?busqueda=${searching_prod.value}`;
    /* Aqui inicia el ajax**/
    let ajax_request = new XMLHttpRequest();

    products_random = document.getElementById('productos-chidos');
    
    ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState === 4){
            let res_json = JSON.parse(ajax_request.responseText);
            for(let i in res_json){
                divj = document.createElement('div');
                
                parafj = document.createElement('p');
                parafj.setAttribute("class", "font-weight-bold");
                parafj.innerHTML = res_json[i].precio;
                divj.append(parafj);
                
                parafj = document.createElement('p');
                parafj.innerHTML = `${res_json[i].descripcion}`;
                divj.append(parafj);
                
                products_random.appendChild(divj);
            }
        }
    };
    ajax_request.open("GET", ajax_url, true);
    ajax_request.send();

});

