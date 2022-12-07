<?php


require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db ->conexion();

$sql = $con -> prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql -> execute();
//$resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pity's Vetshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">

</head>
<body>
        
<header>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container">
        <a href="#" class="navbar-brand ">
          <strong>Pity's Vetshop</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarHeader" aria-controls="navbarHeader" 
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Catalogo</a>
                </li>

            </ul>
            <a href="carrito.php" class="btn btn-primary">Carrito</a>
      </div>
      </div>
    </div>
  </header>
  <main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">Pity's Vetshop</h1>
        </div>
    </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
      </div>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php foreach($resultado as $row){ ?>
            <div class="col" >
              <div class="card shadow-sm">
                <?php 
                $id = $row['id'];
                $imagen= "imagenes/productos/". $id ."/correa.jpg";

                if(!file_exists($imagen)){
                  $imagen = "imagenes/no-photo.jpg";
                }

                  

                ?>
                <img src="<?php echo $imagen; ?>">
               <!-- "imagenes/productos/correa/correa.jpg" -->
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row ['nombre']; ?></h5>
                   <!-- <h5 class="card-title">Correa</h5>-->
                  <p class="card-text"> <?php echo number_format($row ['precio'],2 ,'.', ','); ?></p>
                  <!-- <p class="card-text"> $500 </p>-->
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="detalles.php?id=<?php echo $row['id'];?> &token =<?php
                         echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>" class="btn btn-primary">detalles</a>


                    </div>
                    <a href="" class="btn btn-success">Agregar</a>
                    </div>
                  </div>
                </div>
            </div>
          <?php } ?>
      </div>
  </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
    crossorigin="anonymous"></script>
</body>
</html>