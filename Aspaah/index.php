<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASPAAH</title>
    <link rel="icon" href="imagenes/logo.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link href="fontawesonme/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
    <div class="container-videoD">
        <div class="containerD">
            <div class="container-row">
                    <video autoplay playsinline muted loop preload>
                        <source src="video/VIDEO1.mp4">
                    </video>
                    <svg class="svgaspaah" height="100%" width="100%">
                        <defs>
                            <mask id="mask" x="0" y="0" height="100%" width="100%">
                                <rect x="0" y="0" height="100%" width="100%"/>
                                <text x="50%" y="50%" fill="black" text-anchor="middle">ASPAAH</text>
                            </mask>
                        </defs>
                        <rect x="0" y="0" height="100%" width="100%"/>
                    </svg>
                
            </div>
        </div>
    </div>
    <div class="content_todo">
        <div class="header-inner">
        <div class="container nav1" style="max-width: 1390px;">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light" id="estilo_nav">
                    <div class="container-fluid container_nav">
                        <button class="navbar-toggler color_borde_button_nav" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse nav_principal" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                                style="--bs-scroll-height: 100px;">
                                <li class="nav-item dropdown lista_nav">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown lista_nav">
                                    <a href="#noticiasid">Noticias</a>
                                </li>
                                <li class="nav-item dropdown lista_nav">
                                    <a href="#Quienes_somos">¿Quienes Somos?</a>
                                </li>
                                <li class="nav-item dropdown lista_nav">
                                    <a href="#productosid">Productos</a>
                                </li>
                                
                                <li class="nav-item dropdown lista_nav">
                                    <a href="#serviciosid">Servicios</a>
                                </li>
                                
                                <li class="nav-item dropdown lista_nav">
                                    <a href="#contactosid">Contactos</a>
                                </li>
                            </ul>
                        </div>
                        <a class="logo" href="index.html"><img src="imagenes/LOGO PNG.PNG" alt="logo" id="logo"></a>
                        <a class="navbar-brand nombre_organizacion ms-2" href="index.html">ASPAAH</a>
                    </div>
                </nav>
            </div>
            </div>
            </div>
            <div class="container-video">
                <div class="buton_Audio_principal">
                    <audio id="audio">
                        <source src="audio/fondo1.mp3" autoplay="autoplay" loop="loop" type="audio/mpeg">
                    </audio>
                    <button class="buton_audio" id="playPauseBTN" onclick="playPause()">🔈</i></button>
                </div>
                <div class="eslogan_aspaah"><img src="imagenes/diseño aspaah.PNG" alt="eslogan aspaah"></div>
                <video class="video-background" src="video/Aspaah.mp4" autoplay loop muted></video>
                <div id="carouselExampleSlidesOnly" class="carousel slide slider-celular" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/imagenprincipal.jpg" class="d-block w-100" alt="cultivo">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/imagenprincipal1.jpg" class="d-block w-100" alt="cultivo">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/imagenprincipal2.jpg" class="d-block w-100" alt="cultivo">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/imagenprincipal3.jpg" class="d-block w-100" alt="cultivo">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/imagenprincipal4.jpg" class="d-block w-100" alt="cultivo">
                        </div>
                    </div>
                </div>
            </div>
        
        
            
            
            <div class="container-fluid py-3 esquema_general" id="noticiasid">
                <div class="row">
                    <div class="col-12 text-center wow animate__animated animate__fadeInUpBig animate__delay-0.5s">
                        <h2 class="aboutl"><strong>Noticiiiias</strong></h2>
                        <section id="slider">
                            <input type="radio" name="slider" id="s1">
                            <input type="radio" name="slider" id="s2">
                            <input type="radio" name="slider" id="s3" checked>
                            <input type="radio" name="slider" id="s4">
                            <input type="radio" name="slider" id="s5">
                            <label for="s1" id="slide1">
                                <img src="imagenes/10294jhe.jpg" height="100%" width="100%">
                                <div class="label_letra d-flex">
                                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum animi nam similique. Voluptatem repudiandae culpa harum aperiam soluta praesentium rerum optio id, possimus quia repellat reprehenderit. Rerum sunt aliquam aliquid!</h4>
                                </div>
                                <div class="label_buton">
                                    <button>
                                        <a href="">Leer Más</a>
                                    </button>
                                </div>
                            </label>
                            <label for="s2" id="slide2">
                                <img src="imagenes/Agricultura.jpg" height="100%" width="100%">
                                <div class="label_letra d-flex">
                                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum animi nam similique. Voluptatem repudiandae culpa harum aperiam soluta praesentium rerum optio id, possimus quia repellat reprehenderit. Rerum sunt aliquam aliquid!</h4>
                                </div>
                                <div class="label_buton">
                                    <button>
                                        <a href="">Leer Más</a>
                                    </button>
                                </div>
                            </label>
                            <label for="s3" id="slide3">
                                <img src="imagenes/depositphotos_74159017-stock-photo-tractor-spraying.jpg" height="100%" width="100%">
                                <div class="label_letra d-flex">
                                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum animi nam similique. Voluptatem repudiandae culpa harum aperiam soluta praesentium rerum optio id, possimus quia repellat reprehenderit. Rerum sunt aliquam aliquid!</h4>
                                </div>
                                <div class="label_buton">
                                    <button>
                                        <a href="">Leer Más</a>
                                    </button>
                                </div>
                            </label>
                            <label for="s4" id="slide4">
                                <img src="imagenes/fondo1jhe.jpg" height="100%" width="100%">
                                <div class="label_letra d-flex" >
                                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum animi nam similique. Voluptatem repudiandae culpa harum aperiam soluta praesentium rerum optio id, possimus quia repellat reprehenderit. Rerum sunt aliquam aliquid!</h4>
                                </div>
                                <div class="label_buton">
                                    <button>
                                        <a href="">Leer Más</a>
                                    </button>
                                </div>
                            </label>
                            <label for="s5" id="slide5">
                                <img src="imagenes/fondojhe.jpg" height="100%" width="100%">
                                <div class="label_letra d-flex">
                                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum animi nam similique. Voluptatem repudiandae culpa harum aperiam soluta praesentium rerum optio id, possimus quia repellat reprehenderit. Rerum sunt aliquam aliquid!</h4>
                                </div>
                                <div class="label_buton">
                                    <button>
                                        <a href="">Leer Más</a>
                                    </button>
                                </div>
                            </label>
                        </section>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-3 esquema_general quienes_sclass" id="Quienes_somos">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="aboutl"><strong>Quienes Somos</strong></h2>	
                    </div>
                </div>
                <!-- Sección quienes somos HJVR-->
                <section class="section-md">
                    <div class="container">
                    <div class="row row-50 justify-content-center">
                        <div class="col-md-10 col-lg-5 col-xl-5  wow animate__animated animate__fadeInLeftBig">
                            <div id="carouselExampleDark" class="shadow-1 carousel carousel-dark slide" data-bs-ride="carousel"  width="549" height="476">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="4000">
                                    <img src="imagenes/qs-1.jpg" class="d-block w-100" alt="aspaah" width="549" height="476">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="4000">
                                    <img src="imagenes/s-2.jpg" class="d-block w-100" alt="aspaah" width="549" height="476">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="4000">
                                    <img src="imagenes/s-3.jpg" class="d-block w-100" alt="aspaah" width="549" height="476">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="col-md-10 col-lg-7 col-xl-6 offset-md-1  wow animate__animated animate__fadeInRightBig">
                        <div class="wow animate__animated animate__bounce animate__delay-1s">
                        <h15>ASPAAH</h15>
                        </div>
                        <p class="p-1">Asociación de Productores Agropecuarios, Agroalimentarios e Hidrobiológicos de Puno</p>
                       
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                            
                            <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Nuestras Metas</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Nuestra Misión</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Nuestra Vsión</a></li>
                            </ul>
                            
                            <div class="tab-content">
                            <div class="p-2 tab-pane fade show active wow animate__animated animate__fadeInUp animate__delay-1s" id="tabs-4-1">
                                <p>Incrementar la productividad agropecuaria, agroalimentaria e hidrobiologica, manteniendo siempre altos estandares de calidad en nuestros procesos; Conseguir mejorar la rentabilidad de nuestros socios.</p>
                                <div class="text-center text-sm-left offset-top-30">
                                <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                                    <li>En ganaderia</li>
                                    <li>Innovar Maquinarias </li>
                                    <li>Riego Tecnificado</li>
                                    <li>Convenios</li>
                                    <li>Mejor rentabilidad</li>
                                    <li>Siembra agrícola</li>
                                </ul>
                                </div>
                                <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Contáctenos</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="#">Ubíquenos</a></div>
                            </div>
                            <div class="p-2 tab-pane fade" id="tabs-4-2">
                                <p>Ser una asociación lider en la región de Puno, que este al servicio de sus productores para poder juntos lograr una mejora en su calidad de vida, ofreciéndoles siempre servicios de calidad.</p>
                                <div class="text-center text-sm-left offset-top-30">
                                <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                                    <li>Honestidad</li>
                                    <li>Compromiso</li>
                                    <li>Generosidad</li>
                                    <li>Innovación</li>
                                    <li>Gestión democrática</li>
                                    <li>Cooperación mutua</li>
                                </ul>
                                </div>
                                <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Contáctenos</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="contact-us.html">Ubíquenos</a></div>
                            </div>
                            <div class="p-2 tab-pane fade" id="tabs-4-3">
                                <p>Promover la asociatividad y transferencia de tecnologia integral para un buen vivir, caracterizarnos por el cumplimiento de estándares de calidad, innovación constante de los procesos y protección del medio ambiente, manteniendo la alta vocación de servicio.</p>
                                <div class="text-center text-sm-left offset-top-30">
                                <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                                    <li>Honestidad</li>
                                    <li>Compromiso</li>
                                    <li>Generosidad</li>
                                    <li>Innovación</li>
                                    <li>Gestión democrática</li>
                                    <li>Cooperación mutua</li>
                                </ul>
                                </div>
                                <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Contáctenos</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="contact-us.html">Ubíquenos</a></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
            </div>
            <div class="py-3 esquema_general wow animate__animated animate__zoomIn" id="productosid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="aboutl"><strong>Productos</strong></h2>	
                    </div>
                </div>
                <div class="row">
                    <div class="box hvr-bounce-in">
                        <img class="img-box" src="imagenes/Productos/leche.jpg" alt="">
                        <div class="box1 text-center">
                            <h1>leche</h1>
                        </div>
                        <div class="box2">
                            <img src="imagenes/Productos/leche.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box hvr-bounce-out">
                        <img class="img-box" src="imagenes/Productos/yogurt.jpg" alt="">
                        <div class="box1 text-center">
                            <h1>yogurt</h1>
                        </div>
                        <div class="box2">
                            <img src="imagenes/Productos/envaseyo.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box hvr-bounce-in">
                        <img class="img-box" src="imagenes/Productos/mantequilla.jpg" alt="">
                        <div class="box1 text-center">
                            <h1>mantequilla</h1>
                        </div>
                        <div class="box2">
                            <img src="imagenes/Productos/manti.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box hvr-bounce-out">
                        <img class="img-box" src="imagenes/Productos/helado.jpg" alt="">
                        <div class="box1 text-center">
                            <h1>Helado</h1>
                        </div>
                        <div class="box2">
                            <img src="imagenes/Productos/lecheco.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="container-fluid py-3 esquema_general" id="serviciosid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="aboutl"><strong>Servicios</strong></h2>	
                    </div>
                </div>
                <div class="row">
                    <div class="container__card">
        
                        <div class="card__father">
                            <div class="card">
                                <div class="card__front" style="background-image: url(imagenes/prueba.jpg);">
                                    <div class="bg"></div>
                                    <div class="body__card_front">
                                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, omnis.</h1>
                                    </div>
                                </div>
                                <div class="card__back">
                                    <div class="body__card_back">
                                        <h1>Windows 10</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab quas recusandae voluptatum aliquid tempore animi corporis voluptas. Tempore neque iure necessitatibus voluptas nesciunt animi dolores incidunt delectus sapiente illum.</p>
                                        <input type="button" value="Leer Más">
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="card__father">
                            <div class="card">
                                <div class="card__front" style="background-image: url(imagenes/prueba.jpg);">
                                    <div class="bg"></div>
                                    <div class="body__card_front">
                                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, omnis.</h1>
                                    </div>
                                </div>
                                <div class="card__back">
                                    <div class="body__card_back">
                                        <h1>MAC OS X Capitan</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab quas recusandae voluptatum aliquid tempore animi corporis voluptas. Tempore neque iure necessitatibus voluptas nesciunt animi dolores incidunt delectus sapiente illum.</p>
                                        <input type="button" value="Leer Más">
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="card__father">
                            <div class="card">
                                <div class="card__front" style="background-image: url(imagenes/prueba.jpg);">
                                    <div class="bg"></div>
                                    <div class="body__card_front">
                                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, omnis.</h1>
                                    </div>
                                </div>
                                <div class="card__back">
                                    <div class="body__card_back">
                                        <h1>UBUNTU</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab quas recusandae voluptatum aliquid tempore animi corporis voluptas. Tempore neque iure necessitatibus voluptas nesciunt animi dolores incidunt delectus sapiente illum.</p>
                                        <input type="button" value="Leer Más">
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
            <div class="container-fluid py-3 esquema_general" id="contactosid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="aboutl"><strong>Contactos</strong></h2>	
                    </div>
                </div>
                 <!-- Sección Mapa y Contactos-->
                
                <section class="section section-md section-last bg-default text-md-left">
                    <div class="container">
                    <div class="row row-50">
                        <div class="col-lg-6 section-map-small wow animate__animated animate__fadeInLeft animate__delay-1s">
                            <iframe class="border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6607.56294665781!2d-70.15288311507442!3d-15.50095263376533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9167f15a1a276277%3A0xfe14b95563ecb651!2splanta%20quesera%20casa%20blanca%20yocara!5e0!3m2!1ses!2spe!4v1626059918726!5m2!1ses!2spe" width="520" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-6 wow animate__animated animate__fadeInRight animate__delay-1s">
                        <h4 class="text-spacing-50 wow animate__animated animate__zoomIn animate__delay-2s">ASPAAH - <h20>&nbsp;Asociación de productores Agropecuarios, Ganaderos e Hidrobiológicos.</h20></h4>
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="row row-14 gutters-14">
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-first-name">Nombres</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-last-name">Apellidos</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email">Correo Electronico</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                <label class="form-label" for="contact-message">Mensaje</label>
                                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            </div>
                            <button class="button button-primary button-pipaluk" type="submit">Enviar mensaje</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </section>
                <!-- Fin Sección Mapa y Contactos-->
            </div>
        
        
        
        
        
        
            

            <footer>
                <div class="footer-jhey">
                    <div class="container text-center text-md-left jhey_info">
                        <div class="  row text-center text-md-left jhey_row">
                            <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-6 wow animate__animated animate__flipInX animate__delay-1s">
                                <H1 class="jhey_letra-h1"> ASPAAH</H1>
                                <hr class="mb-4">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href=""> <i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href=""> <i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href=""> <i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href=""> <i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href=""> <i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
        
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-6 wow animate__animated animate__flipInX animate__delay-2s">
                                <H1 class="jhey_letra-h1">Contact US</H1>
                                <div class="text-center">
                                    <ul class="contactos">
                                        <li>
                                            <a href=""> <i class="fas fa-home mr-3"></i> Direccion</a>
                                        </li>
                                        <li>
                                            <a href=""> <i class="fas fa-envelope"></i>
                                            Correo</a>
                                        </li>
                                        <li>
                                            <a href=""> <i class="fas fa-phone"></i>
                                            Numero celular</a>
                                        </li>
                                        <li>
                                            <a href=""> <i class="fas fa-print"></i>
                                            Telefono Fijo</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                        </div>
                    </div>
                    <div class="img-svg">
                        <img src="Imagenes/ola_negra.svg" id="footer" >
                        <img src="Imagenes/ola_negra.svg" id="footer1" >
                    </div>
                </div>
                
            </footer>
</div>
<div id="button-up">

    <i class="fas fa-chevron-up"></i>
    
</div>



    
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/core.min.js"></script>
    <!-- Inicio Script animacion de la pagina -->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Fin Script animacion de la pagina -->
    <!-- Script mapa y contáctos -->
    <script src="jquery-latest.js"></script>
    <script src="js/scriptMT.js"></script>
    <script src="main.js"></script>
    <!-- Fin Script mapa y contáctos --> 
    <script type="text/javascript">



    </script>
</body>
</html>
