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
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <header>
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
      
      <div class="about">
         <div class="container">
            <div>
               <p></p>
               <br>
            </div>
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
