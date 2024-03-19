<body class="contenedor-fondo" style="background-image: url(Views/Landing/Dependencias/imagenes/fondo8.jpg);background-size: cover; background-repeat: no-repeat;";>
<!-- inicio banner -->

    <div class=" col col-sm-10">
        <div class=" plazas">
            <div id="carouselExampleAutoplaying" class=" carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="Views/Landing/Dependencias/imagenes/galeria/plaza6.jpg" height="400px" class=" d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" >
                        <img src="Views/Landing/Dependencias/imagenes/galeria/plaza2.png" height="400px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" >
                        <img src="Views/Landing/Dependencias/imagenes/galeria/agricultura.jpg" height="400px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Views/Landing/Dependencias/imagenes/galeria/plaza7.jpg" height="400px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Views/Landing/Dependencias/imagenes/galeria/variedad.jpg" height="400px" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Fin banner-->

    <!-- Inicio categorias-->
    <div class="container5">
        <div class="bg-success p-5 text-dark bg-opacity-50">
            <div class="banner">
                <div class="text">
                    <h3>CATEGORIAS</h3>
                    <h4>Trabajando con los CAMPESINOS</h4>
                </div>
                <div class="Texbanner row">
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="Views/Landing/Dependencias/imagenes/frutas.jpg" class="img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Frutas</h5>
                    <p class="text-center"><a class="btn btn-success">Seleccionar</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="Views/Landing/Dependencias/imagenes/vegetales.jpg" class=" img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Vegetales</h5>
                    <p class="text-center"><a class="btn btn-success">Seleccionar</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="Views/Landing/Dependencias/imagenes/hortalizas.jpg" class="img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Hortalizas</h5>
                    <p class="text-center"><a class="btn btn-success">Seleccionar</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--Fin categorias-->

    <!--Inicio blog-->
    <div class="info">
        <article class="article">
            <section class="section">
                <h2>Beneficios del Plátano</h2>
                <div class="preview">
                    <p>Los plátanos verdes son una extraordinaria opción para controlar los niveles de azúcar ya que contienen un menor porcentaje que los plátanos maduros.</p>
                    <img src="Views/Landing/Dependencias/imagenes/info1.jpg" alt="platano">
                </div>
                <a href="#">ver más...</a>
            </section>
            <section class="section">
                <h2>Beneficios del Aguacate</h2>
                <div class="preview">
                    <p>Reduce los niveles de colesterol malo en sangre y aumenta el colesterol bueno.</p>
                    <img src="Views/Landing/Dependencias/imagenes/info2.jpeg" alt="aguacate">
                </div>
                <a href="#">ver más...</a>
            </section>
        </article>
<!-- Fin blog-->

<!--Inicio registro-->

        <aside class="aside">
            <h2>REGISTRO AGRICULTOR</h2>
            <form action="">
                <p>Nombres <br><input type="text" name="nombres"></p>
                <p>Apellidos <br><input type="text" name="apellidos"></p>
                <p>Documento <br><input type="text" name="documento"></p>
                <p>Número de Documento <br><input type="text" name="numerodedocumento"></p>
                <p>Fecha de Nacimiento <br><input type="date" name="fechadenacimineto"></p>
                <p>Celular <br><input type="number" name="celular"></p>
                <p>Ciudad <br><input type="text" name="ciudad"></p>
                <p class="btn"><input type="submit" value="Validar Registro"></p>
            </form>
        </aside>
    </div>
</body>
<!-- Fin registro-->