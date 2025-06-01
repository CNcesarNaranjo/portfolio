<?php
    $pg = "contacto";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/stilos.css">
    <link rel="shortcut icon" href="imagenes/fav.png">
    <title>Contacto</title>
</head>

<body id="contacto" class="d-flex flex-column h-100">
   <header class="container">
        <?php include_once ("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp</p>
            </div>
            <div class=" col-12 col-sm-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp"
                            class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="mensaje" placeholder="Escribe aqui tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn" name="btnEnviar" id="btnEnviar">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="row">
            <div class="col-md-3  col-12">
                <a href="https://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-md-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-md-3 col-12">
                <a href="mailto:cesnaranjo1089@gmail.com">cesnaranjo1089@gmail.com</a>
            </div>
        </div>
    </footer>
</body>

</html>