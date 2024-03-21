<?php echo $this->extend('landing/plantilla'); ?>

<div class="container-sm" style="opacity: 0.9; ">
  <!-- inicio carrusel -->
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-1"></div>
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-10">
      <?php echo $this->section('xxxc'); ?>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
            aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
            aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
            aria-label="Slide 7"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
            aria-label="Slide 8"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
            aria-label="Slide 9"></button>
        </div>
        <div class="carousel-inner mx-auto p-5">
          <div class="carousel-item active">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/plaza6.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/plaza2.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/agricultura.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/plaza7.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/variedad.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/familia.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/plaza3.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/plaza5.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/slider5.webp"
              class="d-block w-100 rounded-5 img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span style="background-color:transparent; color: #8FBC8F" class="carousel-control-prev-icon"
            aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <?php echo $this->endSection(); ?>
    </div>
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-1"></div>
  </div>
</div><!-- fin modulo carrusel -->
<br><br>
<div class="container-fluid">
  <!-- inicio modulo medio categorias -->
  <div class="row">
    <div class="col text-center"><br> <br>
      <h3>CATEGORIAS</h3><br>
      <h4>trabajando con los CAMPESINOS</h4><br><br>
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-5">
        <div class="col">
          <div class="card bg-transparent text-white">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/frutas.webp" class="rounded-5"
              alt="...">
            <div class="card-body">
              <h5 class="card-title">Frutas</h5>
              <p class="card-text"><button class="btn btn-success" type="button">Ver Mas</button></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card bg-transparent text-white">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/vegetales.webp" class="rounded-5"
              alt="...">
            <div class="card-body">
              <h5 class="card-title">Vegetales</h5>
              <p class="card-text"><button class="btn btn-success" type="button">Ver Mas</button></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card bg-transparent text-white">
            <img src="../assets/dependencias/landing/dependencias/imagenes/webP/hortalizas.webp" class="rounded-5"
              alt="...">
            <div class="card-body">
              <h5 class="card-title">Hortalizas</h5>
              <p class="card-text"><button class="btn btn-success" type="button">Ver Mas</button></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- fin modulo medio categorias -->
<br><br><br>


<div class="container-fluid"><br><br>
  <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 d-flex justify-content-evenly d-flex align-items-center">
    <div class="col-12 col-sm-12 col-md-8 ">
      <div class="row" style="color: #8FBC8F;"><br><br>


        <div class="card mb-3" style="max-width: auto;"><br><br>
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../assets/dependencias/landing/dependencias/imagenes/webP/info1.webp" class="img-fluid rounded-5" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Beneficios del Plátano</h5>
                <p class="card-text">Los plátanos verdes son una extraordinaria opción para controlar los niveles de azúcar ya que contienen un menor porcentaje que los plátanos maduros..</p>
                <p class="card-text"><small class="text-body-secondary">
                  <button class="btn btn-success" style="background-color: #8FBC8F;">Ver mas...</button>
                </small></p>
              </div>
            </div>
          </div><br><br>
        </div>



      </div><br><br>
      <div class="row">


        <div class="card mb-3" style="max-width: auto;"><br><br>
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../assets/dependencias/landing/dependencias/imagenes/webP/info2.webp" class="img-fluid rounded-5" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Beneficios del Aguacate</h5>
                <p class="card-text">Reduce los niveles de colesterol malo en sangre y aumenta el colesterol bueno..</p>
                <p class="card-text"><small class="text-body-secondary">
                  <button class="btn btn-success" style="background-color: #8FBC8F;">Ver mas...</button>
                </small></p>
              </div>
            </div>
          </div><br><br>
        </div>



      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 ">


      
      <div class="card bg-white text-center mb-3 p-2 text-dark"><!-- inicio formulario -->
        <div class="card-body">
          <h5 class="card-title">REGISTRO AGRICULTOR</h5>   <br><br>       
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-12">
              <form action="" method="post">
                <label for="">Nombres:</label>
                <input placeholder="ingrese nombres completos" required type="text" class="form-control rounded-5 form-control-sm" style="background-color: #8FBC8F;"> 
                <br>
                <label for="">Apellidos:</label>
                <input placeholder="ingrese apellidos completos" required type="text" class="form-control rounded-5 form-control-sm" style="background-color: #8FBC8F;">
                <br><br>
                <select required class="form-select form-control rounded-5" aria-label="Default select example" style="background-color: #8FBC8F;">
                  <option value="" selected>¿Tipo de Documento?</option>
                  <option value="1">Tarjeta de identidad</option>
                  <option value="2">Cedula de ciudadania</option>
                  <option value="3">Permiso de permanencia</option>                  
                  <option value="3">Cedula de extranjeria</option>
                </select>
                <br>
                <label for="">N° de Identificación:</label>
                <input placeholder="ingrese # de identificacion" required type="number" class="form-control rounded-5 form-control-sm" style="background-color: #8FBC8F;">
                <br>
                <label for="">Fecha de Nacimiento:</label>
                <input placeholder="ingrese" required type="date" value="1998-04-17" class="form-control rounded-5 form-control-sm" style="background-color: #8FBC8F;">
                <br>
                <label for="">N° de Telefono Celular</label>
                <input placeholder="ingrese # de telefono " required type="number" class="form-control rounded-5 form-control-sm" style="background-color: #8FBC8F;">
                <br>
                <label for="">Ubiacion Geografica</label>
                <input placeholder="ingrese vereda/corregimiento/pueblo/ciudad" required type="text" class="form-control rounded-5 form-control-sm" style="background-color: #8FBC8F;">
                <br>
                <br>
                <button type="submit" class="btn btn-success fs-5" style="background-color: #8FBC8F; color:black;">Registrarme Como AGRICULTOR</button>
              </form>
            </div>
          </div>
        </div>
      </div><!-- fin formulario -->
      


    </div>
  </div>
</div>
