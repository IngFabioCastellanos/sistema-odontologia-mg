<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../resources/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../resources/css/style.css">

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

<body>
    <nav class="navbar navbar-expand-lg navbar-dark indigo">
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
        style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background2.jpg);">
        <br>
        <h3 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">ODONTOLOGIA MG</h3>

        <h5 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">SISTEMA DE INFORMACIÓN PARA EL CONTROL DE
            GANANCIAS</h5>

        <img src="../resources/images/bg.jpg" class="img-fluid" alt="smaple image">

        <br>

        <h5 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">Desarrollado por:</h5>

        <h5 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">Fabio ivan castellanos silva</h5>
        <h5 class="text-center mx-auto font-weight-bold mb-4 pb-2 white-text">John sebastian suarez</h5>


    </section>
    <!--Section: Content-->

</body>

<!-- jQuery -->
<script type="text/javascript" src="../resources/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../resources/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../resources/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../resources/js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>

</html>
<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/welcome.blade.php ENDPATH**/ ?>