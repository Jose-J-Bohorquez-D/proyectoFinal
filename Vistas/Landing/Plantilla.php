<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campeche.com</title>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="Vistas/Dependencias/js/app.js"></script>
    
    <link rel="stylesheet" href="Vistas/Dependencias/css/reset.css">
    <link rel="stylesheet" href="Vistas/Dependencias/css/stylecompras.css">
    <link rel="stylesheet" href="Vistas/Dependencias/css/campeche.css">
    <link rel="stylesheet" href="Vistas/Dependencias/css/fuentes.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body background="Vistas/Dependencias/imagenes/background.jpeg">
    <div class="container-fluid">
      <?php require_once("Vistas/Modulos/navbar.php") ?>
    </div>
    <div class="text-center">
      <?php $enlace=new MvcCtlr; $enlace->enlaces_paginas_ctlr(); ?>
    </div>
    
    <div class="container-fluid">
      <?php require_once("Vistas/Modulos/footer.php") ?>
    </div>
  </body>
</html>