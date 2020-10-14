<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <link rel="icon" href="img/dientes.svg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('https://use.fontawesome.com/releases/v5.11.2/css/all.css')); ?>">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap')); ?>">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/mdb.min.css')); ?>">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">

    <title>Odontologia Mg</title>

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .bg {
            background-image: url("../resources/images/overlay.png"), url("../resources/images/bg.jpg");
        }

    </style>
</head>

<body style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background4.jpg);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-lg-0">
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo e(url('/home')); ?>">Inicio </a>
                        <?php else: ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Iniciar sesion </a>
                        </li>
                        <li class="nav-item">
                            <?php if(Route::has('register')): ?>
                                <a class="nav-link" href="<?php echo e(route('register')); ?>">Registrarse </a>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!--Section: Content-->
    <section class="dark-grey-text text-center"
        style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background4.jpg);">
        <br>
        <h3 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">ODONTOLOGIA MG</h3>

        <h5 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">APLICACIÓN WEB PARA EL CONTROL DE GANANCIAS Y MANEJO DE
        INVENTARIO</h5>
        <div class="container">
        <img src="<?php echo e(asset('img/bg.jpg')); ?>" class="img-fluid" alt="smaple image">
        </div>

        <h5 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">Desarrollado por:</h5>

        <h5 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">Fabio ivan castellanos silva</h5>
        <h5 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">John sebastian suarez</h5>
        <footer class="main-footer" style="max-height: 100px;text-align: center; background-image: url();">
            <strong style="color: white">Sistema para el consultorio <span style="color: white">Odontologia Mg | Copyriht @ 2020</span></strong>
        </footer>
    </section>
    <!--Section: Content-->

</body>

<!-- jQuery -->
<script type="text/javascript" src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo e(asset('/js/popper.min.js')); ?>"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo e(asset('/js/mdb.min.js')); ?>"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>

</html>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/welcome.blade.php ENDPATH**/ ?>