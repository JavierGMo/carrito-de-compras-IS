let ajax_url = 'usuarios/leerproductos.php';
//let params = `?id=${id}`;
//ajax_url += "?hola=hola";


let ajax_request = new XMLHttpRequest();
let tbodyread;

ajax_request.onreadystatechange = function() {

    if (ajax_request.readyState === 4 ) {
        tbodyread = document.getElementById('tbody-read');
        let resultados_json_bd = JSON.parse(ajax_request.responseText);
        let tam = resultados_json_bd.length;
        let tds = document.createElement('td');
        let trs = document.createElement('tr');
        let btn_actualizar;
        let btn_borrar = document.createElement('a');
        
        for(let i = 0; i<tam; ++i){
            trs = document.createElement('tr');
            //
            tds = document.createElement('td');
            tds.innerHTML = resultados_json_bd[i].id;
            trs.append(tds);
            //
            tds = document.createElement('td');
            tds.innerHTML = resultados_json_bd[i].nombre;
            trs.append(tds);
            //
            tds = document.createElement('td');
            tds.innerHTML = resultados_json_bd[i].precio;
            trs.append(tds);
            //
            tds = document.createElement('td');
            tds.innerHTML = resultados_json_bd[i].descripcion;
            trs.append(tds);
            //
            btn_actualizar = document.createElement('a');
            btn_actualizar.innerHTML = "Actualizar";
            btn_actualizar.setAttribute("href", `actualizar.php?id=${resultados_json_bd[i].id}`);
            btn_actualizar.setAttribute("class", 'btn btn-primary');
            btn_actualizar.setAttribute("onclick", '');
            tds = document.createElement('td');
            tds.append(btn_actualizar);
            trs.append(tds);
            //
            btn_borrar = document.createElement('a');
            btn_borrar.innerHTML = "Borrar";
            btn_borrar.setAttribute("href", '');
            btn_borrar.setAttribute("class", 'btn btn-danger');
            btn_borrar.setAttribute("onclick", `borrar(${resultados_json_bd[i].id})`);
            tds = document.createElement('td');
            tds.append(btn_borrar);
            trs.append(tds);
            //
            tbodyread.append(trs);
        }
    }else{
            trs = document.createElement('tr');
            //
            tds = document.createElement('td');
            tds.innerHTML = "not found";
            trs.append(tds);
            //
            tds = document.createElement('td');
            tds.innerHTML = "not found";
            trs.append(tds);
            //
            tds = document.createElement('td');
            tds.innerHTML = "not found";
            trs.append(tds);
            //
            tds = document.createElement('td');
            tds.innerHTML = "not found";
            trs.append(tds);
            //
            btn_actualizar = document.createElement('a');
            btn_actualizar.innerHTML = "Actualizar";
            btn_actualizar.setAttribute("href",'');
            btn_actualizar.setAttribute("class", 'btn btn-primary');
            tds = document.createElement('td');
            tds.append(btn_actualizar);
            trs.append(tds);
            //
            btn_borrar = document.createElement('a');
            btn_borrar.innerHTML = "Borrar";
            btn_borrar.setAttribute("href", '');
            btn_borrar.setAttribute("class", 'btn btn-danger');
            tds = document.createElement('td');
            tds.append(btn_borrar);
            trs.append(tds);
    }
}
ajax_request.open("GET", ajax_url, true);
//ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


ajax_request.send();