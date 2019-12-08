    <?php include("includes/header.php"); ?>
    <header class="bg-light pt-3 pb-3">
        <div class="d-flex flex-row justify-content-around">
            <div id="background-logo" class="w-25">
            </div><!--Imagen de la pagina-->
            <div class="d-flex flex-column w-50">
                <div class="mb-5">
                    <form method="GET" class="form-inline">
                        <div class="w-75">
                            <input type="text" class="form-control-plaintext bg-white" placeholder="Busqueda...">
                        </div>
                        <button type="submit" id="btn-buscador" class="btn btn-primary"><i>Q</i></button>
                    </form>
                </div><!---Barra de busqueda-->
                <div class="d-flex flex-row justify-content-between">
                    <div><a href="#">Inicio</a></div>
                    <div><a href="#">Ofertas</a></div>
                    <div><a href="#">Ayuda</a></div>
                </div><!--nav enlaces-->
            </div><!--Enlaces y barra de busqueda-->
            <div class="position-relative">
                <div>
                    <a href="login.html" id="icon-login-click">Login</a>
                </div><!--icono login pre-form-->
                <div><a href="registro.html">Crear cuenta</a></div>
            </div><!--Login-->
        </div><!--contenedor navegacion-->
    </header><!--header-->
    <div class="d-flex flex-row mt-5 mr-5">
        <div class="w-25">
            <div><p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam et ipsam repellendus similique ratione commodi enim sint saepe. Ad quod quia sapiente quo hic est ipsa accusamus id cupiditate!</span></p></div>
            <div></div>
            <div><p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam et ipsam repellendus similique ratione commodi enim sint saepe. Ad quod quia sapiente quo hic est ipsa accusamus id cupiditate!</span></p></div>
        </div><!--aside del carrito, rango de precio, costo, etc..-->
        <div class="d-flex ml-5"><!--pendiente en el css con background image-->
            <div class="d-flex flex-row justify-content-center">
                <div class="d-flex justify-content-between">
                    <div class="w-25 h-25">
                        <img src="img/gits.jpg" alt="imagen prodcuto" class="w-pixeles h-pixeles">
                    </div><!--imagen del producto-->
                    <div class="w-25 h-25">
                        <div>
                            <a href="#"><span class="display-4">Titulo</span></a>
                            <p><span>xXDarkXx</span></p>
                            <p><span>$un chiflion de dolares</span></p>
                        </div>
                    </div><!--texto y precio del procuto-->
                </div><!--control del producto-->
            </div><!--se aplica un for para recorrer los productos de la base de datos-->
        </div><!--comtenedor antes del for para controlar el estilo de los productos-->
    </div><!--manipulacion del aside y los contenidos principales-->
    <footer class="bg-dark pt-3">
        <div class="d-flex flex-row justify-content-around espacio-comun">
            <div class="d-flex flex-column">
                <div><a href="#">Mi cuenta</a></div>
                <div><a href="#">Ofertas</a></div>
            </div>
            <div class="d-flex flex-column">
                <div><a href="#">Vende</a></div>
                <div><a href="#">Quejas</a></div>                
            </div>
            <div class="d-flex flex-column">
                <div><a href="#">Ayuda</a></div>
            </div>
        </div><!--Opciones de la tienda-->
        <div class="d-flex justify-content-center">
            <div><p class="text-light">Copyright&copy;2019-2090 Tieda de C.V.</p></div><!--div copyright-->
        </div><!--copy right-->
    </footer><!--footer pagina principal-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/acciones-generales.js"></script>
</body>
</html>