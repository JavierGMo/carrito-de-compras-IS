function borrar(id){
    event.preventDefault();
    let ajax_url = './usuarios/borrar.php';
    let params = `ID=${id}`;
    
    
    let ajax_request = new XMLHttpRequest();
    ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState === 4){
            alertify.alert('Borrado', `Producto borrado`);
        }
    }
    ajax_request.open("POST", ajax_url, true);
    ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    

    ajax_request.send(params);
}