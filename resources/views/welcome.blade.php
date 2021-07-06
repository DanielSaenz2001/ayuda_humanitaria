<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ayuda Humanitaria</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">


    </head>
   <body class="main-layout home_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"><img src="images/logo-upeu.png" alt="#"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href="{{ url('/') }}">Inicio</a> </li>
                                 <li> <a href="{{ url('/nosotros') }}">Nosotros</a> </li>
                                 <li><a href="psicologia.html">Psicologia</a></li>
                                 <li><a href="computacion.html">Computación</a></li>
                                 <li><a href="educacion.html">Educación</a></li>
                                 <li><a href="hacemos.html">Hacemos</a></li> 
                                 <li class="mean-last"> <a href="login.html"><img src="images/top-icon.png" alt="#" /></a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <!-- slider -->
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner22.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Por Que Sabemos<br> Lo Que Necesitas<br> Visitanos!</h1>
                        <p>UPeU filial Juliaca realiza seminarios virtuales sobre <br> Intervención en psicología basada en la evidencia <br> 
                           Con el objetivo de brindar ayuda en temas de intervención psicológica con énfasis en el área… </p>
                        <div class="button_section"> <a class="main_bt" href="https://www.upeu.edu.pe">Read More</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="https://www.facebook.com/UPeUOficial"><img src="icon/facebook.png"></a></li>
                           <li> <a href="https://twitter.com/upeuoficial"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="https://pe.linkedin.com/school/upeuoficial"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="https://www.instagram.com/upeuoficial"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner33.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Por Que Sabemos<br> Lo Que Necesitas<br> Visitanos!</h1>
                        <p>UPeU filial Juliaca realiza seminarios virtuales sobre <br> Intervención en psicología basada en la evidencia <br> 
                           Con el objetivo de brindar ayuda en temas de intervención psicológica con énfasis en el área… </p>
                        <div class="button_section"> <a class="main_bt" href="https://www.upeu.edu.pe">Read More</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="https://www.facebook.com/UPeUOficial"><img src="icon/facebook.png"></a></li>
                           <li> <a href="https://twitter.com/upeuoficial"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="https://pe.linkedin.com/school/upeuoficial"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="https://www.instagram.com/upeuoficial"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner44.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Por Que Sabemos<br> Lo Que Necesitas<br> Visitanos!</h1>
                        <p>UPeU filial Juliaca realiza seminarios virtuales sobre <br> Intervención en psicología basada en la evidencia <br> 
                           Con el objetivo de brindar ayuda en temas de intervención psicológica con énfasis en el área… </p>
                        <div class="button_section"> <a class="main_bt" href="https://www.upeu.edu.pe">Read More</a>  </div>
                        <ul class="locat_icon">
                           <<li> <a href="https://www.facebook.com/UPeUOficial"><img src="icon/facebook.png"></a></li>
                           <li> <a href="https://twitter.com/upeuoficial"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="https://pe.linkedin.com/school/upeuoficial"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="https://www.instagram.com/upeuoficial"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!-- end slider -->
      <!-- QUE HACEMOS -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="aboutheading">
                     <h2> ¿ Que <strong class="black"> Hacemos ? </strong></h2>
                     <span>Se brindan diferentes tipos de ayuda a las familias
                        como por ejemplo:</span>
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                     <p> Los apoyos familiares y apoyos de las redes de padres y niños con discapacidad. También se destaca el papel de los apoyos profesionales y por lo tanto cómo los recortes en servicios públicos de tipo sanitario y social han agudizado una inequidad en salud en relación a las familias que pueden o no disponer de servicios adicionales. Se sugieren otros enfoques en los servicios que pueden apoyar a las familias. </p>
                     <a href="about.html">Leer Más</a>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                  <div class="about-box">
                     <figure><img src="images/banner22.jpg" alt="img"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- end QUE HACEMOS -->
      <!-- Psicologia -->
      <div class="Library">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Psicologia <strong class="black"> </strong></h2>
                     <span>Reserva tus sesiones psicológicas con nustro sistema. Ayudas y más beneficios. Escoge entre más de 3 psicólogos disponibles en nuestra plataforma</span> 
                  </div>
               </div>
            </div>
         </div>
         <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="Library-box">
                        <figure><img src="images/psicologia2.jpg" alt="#" class="center-psico"/></figure>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="read-more">
                     <a href="#" >Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Psicologia -->
      <!-- Computación -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Computación <strong class="black"> </strong></h2>
                     <span>Como herramienta mediadora para el aprendizaje. Se entiende que es un arte enseñar a las personas en general utilizando como herramienta fundamental la computadora.</span> 
                  </div>
               </div>
            </div>
            <div class="row box">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/lamb.jpg" alt="img" class="lamb"/></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/compu.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/lamb.jpg" alt="img" class="lamb"/></figure>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="read-more">
                        <a href="#">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Computación -->
       <!-- Educación Economica -->
       <div class="Library">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Educación  <strong class="black">Economica </strong></h2>
                     <span>La educación economica como un derecho del ser humano nos ayuda a desarrollar diversas habilidades financieras, 
                        en diferentes áreas del conocimiento y creatividad, es un proceso de socialización, se dan charlas en
                         grupos de trabajo voluntario, ademas se colabora y se interactúa en la solución de problemas concretos.</span> 
                  </div>
               </div>
            </div>
         </div>
         <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="Library-box">
                        <figure><img src="images/economica.png" alt="#" class="center-psico"/></figure>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="read-more">
                     <a href="#" >Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Educación Economica -->
      <!-- Cómo lo hacemos -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Cómo lo <strong class="black">Hacemos </strong></h2>
                     <span>La universidad Peruana Unión mediante este
                        sistema brindara un servicio de ayuda con las
                        distintas facultades.</span> 
                  </div>
               </div>
            </div>
            <div class="row box">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/en-mision.jpg" alt="img" class="mision"/></figure>
                  </div>
               </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="read-more">
                        <a href="#">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Cómo lo hacemos -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Sigenos en</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="https://www.facebook.com/UPeUOficial"><img src="icon/facebook.png"></a></li>
                        <li> <a href="https://twitter.com/upeuoficial"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="https://pe.linkedin.com/school/upeuoficial"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="https://www.instagram.com/upeuoficial"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Comunicanos</h3>
                     </div>
                     <input class="Newsletter" placeholder="Ingresa tu correo" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2021 Todas las reservas de autor - <a href="https://html.design/">Implementado by IdeasUpeu</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
