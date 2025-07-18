<?php
    $pg = "sobre-mi";
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
    <title>sobre-mi</title>
</head>

<body id="sobre-mi">
    <header class="container">
        <?php include_once ("menu.php"); ?>
    </header>
    <main class="container-fluid">
        <section id="bio" class="container">
            <div class="row">
                <div class="col-12 col-sm-8">
                    <h1 class="col-12 py-5">Sobre mí</h1>
                    <p>Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de programación Full
                        Stack y de Base de datos.</p>
                    <a href="contacto.php" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
                </div>
                <div class="col-12 col-sm-4 mt-sm-4">
                    <img src="imagenes/Cesar_Naranjo.jpg" alt="Cesar_Naranjo" class="foto_perfil">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <a href="contacto.html" class="btn btn-rojo my-5 d-sm-block d-sm-none">Enviar mensaje</a>
                </div>
            </div>
        </section>
        <section id="stack">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">Stack tecnológico</h2>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Javascript</h3>
                            <i class="fa-brands fa-js pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">PHP</h3>
                            <i class="fa-brands fa-php pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">HTML</h3>
                            <i class="fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">API Rest</h3>
                            <i class="fa-solid fa-gears pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Laravel</h3>
                            <i class="fa-brands fa-laravel pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Bootstrap</h3>
                            <i class="fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="fa-solid fa-database pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">CSS</h3>
                            <i class="fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="fa-brands fa-git pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">React.js</h3>
                            <i class="fa-brands fa-react pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Mercadopago</h3>
                            <i class="fa-solid fa-wallet pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Amazon AWS</h3>
                            <i class="fa-brands fa-aws pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Linux</h3>
                            <i class="fa-brands fa-linux pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Apache</h3>
                            <i class="fa-solid fa-server pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Paypal</h3>
                            <i class="fa-brands fa-paypal pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="imagenes/logo-depcsuite.webp" alt="DEPCSUITE" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Alumno</h3>
                    <h4>DEPCSUITE SA</h4>
                    <h5>2025 - presente</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo natus esse sit veritatis nemo
                        voluptatum aliquid unde, sequi eveniet nobis est laudantium exercitationem quod maxime
                        blanditiis, optio nam rem velit?</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="imagenes/uba.webp" alt="Universidad de Buenos Aires" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Full Stack</h3>
                    <h4>Universidad de Buenos Aires</h4>
                    <h5>ago 2015 - ene 2020</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illum amet repudiandae. Molestiae
                        vel iure doloremque itaque repellendus suscipit optio vero nemo dicta possimus deserunt commodi
                        voluptatibus, magni blanditiis aut?</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="imagenes/enacom.svg" alt="Ente Nacional de Comunicaciones" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Senior Full Stack</h3>
                    <h4>ENACOM</h4>
                    <h5>jul 2012 - jun 2018</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae numquam, ullam fugit sint aliquam
                        natus! Consectetur velit sint ducimus molestias atque ullam, amet aliquam soluta mollitia, enim
                        possimus. Eum, praesentium.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5 text-center">
                    <i class="fa-solid fa-landmark" alt="Certificado Digital SA"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Certificado Digital SA</h3>
                    <h4>Consultor Desarrollador</h4>
                    <h5>ago 2014 - dic 2016</h5>
                    <p>Desarrollo, implementación y mantenimiento de sistemas y páginas Web para la consultora, en
                        colaboración con el analista
                        funcional y líder de equipo.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5 text-center">
                    <i class="fa-solid fa-globe" alt="Freelance"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Back-end y Front-end</h3>
                    <h4>Freelance</h4>
                    <h5>jul 2011 - dic 2016</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, magnam mollitia! Quasi eligendi
                        dolorem sit. Laborum nostrum dignissimos tempore eius, eveniet commodi sapiente repudiandae
                        dolorem, ea maiores, id accusantium numquam. </p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="imagenes/globons.png" alt="Globons SRL" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Back-end y Front-end</h3>
                    <h4>Globons SRL</h4>
                    <h5>abr 2010 - ene 2011</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Formación académica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/ean.webp" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Licenciado en Tecnología</h3>
                            <h4>Escuela Argentina de Negocios</h4>
                            <h5>2015 – 2020</h5>
                            <p>https://www.ean.edu.ar/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/unlam.webp" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Ingeniería en Informática</h3>
                            <h4>Universidad Nacional de La Matanza</h4>
                            <h5>2006 – 2010</h5>
                            <p>Materias aprobadas 20 de 41, 48%.<br>
                                https://unlam.edu.ar</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                            <i class="fa-solid fa-landmark" alt="depcsuite"></i>
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Técnico en Informática</h3>
                            <h4>Colegio Parroquial San Juan XXIII</h4>
                            <h5>2003 – 2005</h5>
                            <p>https://colparroquialjuan23.edu.ar</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/utn.webp" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programa Ejecutivo en Project Management</h3>
                            <h4>Universidad Tecnológica Nacional</h4>
                            <h5>Expedición: may 2018</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/ean.webp" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Diplomatura en Marketing</h3>
                            <h4>Escuela Argentina de Negocios</h4>
                            <h5>Expedición: dic 2017</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/fundacion-impulsar.webp" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Capacitación en Planes de Negocio</h3>
                            <h4>Fundación Impulsar</h4>
                            <h5>Expedición: may 2018</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/unlam.webp" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programación Web ASP.NET</h3>
                            <h4>Universidad Nacional de La Matanza</h4>
                            <h5>Expedición: dic 2019</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/microsoft.webp" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programación C# .NET</h3>
                            <h4>Microsoft</h4>
                            <h5>Expedición: dic 2006</h5>
                            <p></p>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                            <i class="fa-solid fa-landmark" alt="depcsuite"></i>
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>English Intermediate B2</h3>
                            <h4>Instituto John Milton de Cultura Inglesa</h4>
                            <h5>Expedición: dic 2006</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fa-regular fa-comments"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                            </div>
                            <div class="col-8 pt-5 px-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Viajar</li>
                                    <li>Hacer ejercicio </li>
                                    <li>Diseñar y Desarrollar sitios Web</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="container mt-auto py-4">
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