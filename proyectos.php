<?php
    $pg = "proyectos";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/stilos.css">
    <link rel="shortcut icon" href="imagenes/fav.png">
    <title>Prooyectos</title>
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once ("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4 p-4">
                    <div class="row border proyecto pb-5">
                        <div class="col-12 p-0">
                            <img src="imagenes/sitio_web_freelancer-.webp" alt="ABM CLIENTES" class="img-fluid">
                        </div>
                        <div class="col-12 p-0">
                            <h2>Sitio Web Freelancer</h2>
                        </div>
                        <div class="col-12">
                            <P class="py-2 px3">Sitio web en el que ofrezco mis productos y servicios
                                como freelancer.
                                He comenzado a desarrollarlo utilizando tecnologías básicas como HTML y CSS, dando mis
                                primeros pasos en el mundo del desarrollo web.</P>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Codigo fuente</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 p-4">
                    <div class="row border proyecto pb-5">
                        <div class="col-12 p-0">
                            <img src="imagenes/img_blog_de_cafe-.webp" alt="ABM VENTAS" class="img-fluid">
                        </div>
                        <div class="col-12 p-0">
                            <h2>Web Blog de Cafe</h2>
                        </div>
                        <div class="col-12">
                            <P class="py-2 px3">Este es un sitio web básico en forma de blog sobre café, desarrollado
                                utilizando HTML y CSS.
                                En él he implementado algunas características que he ido aprendiendo durante mi proceso.
                                </P>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Codigo fuente</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 p-4">
                    <div class="row border proyecto pb-5">
                        <div class="col-12 p-0">
                            <img src="imagenes/wordp_img.webp" alt="proyecto-integrador" class="img-fluid">
                        </div>
                        <div class="col-12 p-0">
                            <h2>Sito Web con WordPress</h2>
                        </div>
                        <div class="col-12">
                            <P class="py-2 px3">Este sitio web fue desarrollado utilizando WordPress, dando mis primeros
                                pasos en esta plataforma.
                                se desarrolló bajo priencipios de desarrollo, haciendolo responsivo para cada dispositivo.
                            </P>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Codigo fuente</a>
                        </div>
                    </div>
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
                <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-md-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-md-3 col-12">
                <a href="mailto:cesnaranjo1089@gmail.com">cesnaranjo1089@gmail.como</a>
            </div>
        </div>
    </footer>
</body>

</html>