<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cornejo Music</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="<?=base_url?>/assets/css/registro.css">
    <link rel="stylesheet" href="<?=base_url?>/assets/css/destacados.css">
    <link rel="stylesheet" href="<?=base_url?>/assets/css/album.css">
    <link rel="stylesheet" href="<?=base_url?>/assets/css/single.css">
</head>

<body class="font-weight-bold">
    <header class="mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <span><a href="<?=base_url?>index.php"><img src="<?=base_url?>assets/img/logo.png" alt="logo"
                                width="50px" height="50px" style="position:relative; top:10px;"></a></span>
                </div>
            </div>
        </div>
        <nav class="navbar  navbar-expand-lg navbar-dark indigo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if(!isset($_SESSION['identity'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url?>usuario/login">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url?>usuario/registro">Registrar</a>
                    </li>
                    <?php else: ?>
                    <?php if(isset($_SESSION['admin'])): ?>
                    <li class="nav-item dropdown multi-level-dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Administración</a>
                        <ul class="dropdown-menu">
                            <!--Añadir subMenu dentro de cada enlace para insercción,actualizar o eliminar-->
                            <a class="dropdown-item" href="<?=base_url?>disco/añadir">Disco></a>
                            <a class="dropdown-item" href="<?=base_url?>single/añadir">Single></a>
                            <a class="dropdown-item" href="<?=base_url?>categoria/añadir">Categoría></a>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Carrito</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu">
                            <?php $categorias = Utils::showCategories();
                                  while($categoria = $categorias->fetch_object()): ?>
                            <a href="<?=base_url?>disco/categoria&nombre=<?php echo($categoria->nombre)?>"
                                class="dropdown-item text-capitalize"><?php echo($categoria->nombre)?></a>
                            <?php endwhile; ?>
                        </div>
                    </li>
                    <?php endif;?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url?>usuario/salir">Salir</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>


    </header>
    <div class="container-fluid mb-5">
        <div class="row">