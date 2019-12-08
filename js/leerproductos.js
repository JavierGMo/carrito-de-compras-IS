console.log("object");
let ajax_url = 'usuarios/leerproductos.php';
//let params = `?id=${id}`;
//ajax_url += "?hola=hola";


let ajax_request = new XMLHttpRequest();


ajax_request.onreadystatechange = function() {

    if (ajax_request.readyState === 4 ) {
        
        let resultados_json_bd = ajax_request.responseText;
        console.log("hoal " + resultados_json_bd);
        console.log("object dasd");
    }else{
        console.log("no");
    }
}
ajax_request.open("GET", ajax_url, true);
//ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


ajax_request.send();