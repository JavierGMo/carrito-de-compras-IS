function borrar(id){
    event.preventDefault();
    let ajax_url = 'borrar.php';
    let params = `id=${id}`;
    
    
    let ajax_request = new XMLHttpRequest();

    ajax_request.open("POST", ajax_url, true);
    ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    

    ajax_request.send(params);
}