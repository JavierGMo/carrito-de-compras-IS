    <?php include('includes/header.php')?>
    <div class="d-flex flex-column justify-content-center"><!--pendiente en el css con background image-->
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide mt-1 mb-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner h-custom">
                    <div class="carousel-item active">
                        <img src="img/heroku.png" class="w-100 h-custom" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/ticket.png" class="w-100 h-custom" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/heroku.png" class="w-100 h-custom" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/ticket.png" class="w-100 h-custom" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cuatro xd slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--<div id="imagenes-carrusel" class="h-100 w-100"></div>--><!--imagenes del carrusel-->
    </div><!--carrusel promos nuevos descuentos-->
    <main>
        <div class="d-flex mb-4"><!--pendiente en el css con background image-->
            <div class="d-flex flex-column">
                <div class="pl-3"><p class="display-4">Titulo del bac</p></div><!--titulo de la categoria-->
                <div class="d-flex flex-row justify-content-center">
                    <div class="mr-2 ml-2">
                        <img src="img/gits.jpg" alt="Imagenes productos" class="imagen-producto">
                        <div><p class="h6">$10000 chifliones de 5 peso xd</p></div>
                    </div><!--para una forma de columna-->
                    <div class="mr-2 ml-2">
                        <img src="img/heroku.png" alt="Imagenes productos" class="imagen-producto">
                        <div><p class="h6">$10000 chifliones de 5 peso xd</p></div>
                    </div><!--para una forma de columna-->
                    <div class="mr-2 ml-2">
                        <img src="img/uno.png" alt="Imagenes productos" class="imagen-producto">
                        <div><p class="h6">$10000 chifliones de 5 peso xd</p></div>
                    </div><!--para una forma de columna-->
                    <div class="mr-2 ml-2">
                        <img src="img/uno.png" alt="Imagenes productos" class="imagen-producto">
                        <div><p class="h6">$10000 chifliones de 5 peso xd</p></div>
                    </div><!--para una forma de columna-->
                </div><!--imagenes de fondo de los productos-->
            </div><!--contenido textos imagenes-->
        </div><!--imagenes de los productos y titulos de las categorias-->
    </main><!--contenidos principales-->
    
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