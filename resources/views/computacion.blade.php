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
                                 <li> <a href="{{ url('/') }}">Inicio</a> </li>
                                 <li> <a href="{{ url('/nosotros') }}">Nosotros</a> </li>
                                 <li><a href="{{ url('/psicologia') }}">Psicologia</a></li>
                                 <li class="active"><a href="{{ url('/computacion') }}">Computación</a></li>
                                 <li><a href="{{ url('/educacion') }}">Educación</a></li>
                                 <li><a href="{{ url('/hacemos') }}">Hacemos</a></li> 
                                 <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
      
      <div class="Books">
         <div class="container">
            <div>
               <br>
               <br>
               <br>
               <br>
               <br>
            </div>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
