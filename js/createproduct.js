let btn_subir_producto = document.getElementById('btn-subir-producto');
    btn_subir_producto.addEventListener('click', function(e){
        e.preventDefault();
        let nom_prod = document.getElementById('nombre_producto_usuario');
        let precio_prod = document.getElementById('precio_producto_usuario');
        let desc_prod = document.getElementById('desc_producto_usuario');
        /**./usuarios/subirproducusuario.php*/
        let ajax_url = './usuarios/subirproducusuario.php';
        let params = `nombre_producto_usuario=${nom_prod.value}&precio_producto_usuario=${precio_prod.value}&desc_producto_usuario=${desc_prod.value}`;
        
        
        let ajax_request = new XMLHttpRequest();

        ajax_request.open("POST", ajax_url, true);
        ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        

        ajax_request.send(params);
        nom_prod.value = "";
        precio_prod.value = "";
        desc_prod.value = "";
});