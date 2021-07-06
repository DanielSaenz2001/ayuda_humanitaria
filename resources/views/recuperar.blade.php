<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Recuperar Contraseña</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        
      <style>
        body{
            background: url(https://www.upeu.edu.pe/wp-content/uploads/2018/11/Edificio-Administrativo-Juliaca.jpg);
        }
      
        .imagen{
            text-align: center; 
        }
        .signin {
            background-color: #d3d3d3;
            font-family: 'Montserrat', sans-serif;
            color: #fff;
            font-size: 14px;
            letter-spacing: 1px;
        }
        
        .login {
            border-radius: 5px; ;
            position: relative;
            height: 500px;
            width: 350px;
            margin: auto;
            padding: 70px 60px;
            background: url(https://minervasf.es/images/formanag_fondo.jpg) no-repeat   center center #505050;   
            text-align: center;
            background-size: cover;
            box-shadow: 0px 30px 60px -5px #000;
            margin-top: 10%;
            margin-bottom: 12%;
        }
        
        form {
            padding-top: 80px;
        }
        
        .active {
            border-bottom: 2px solid #1161ed;
        }
        
        .nonactive {
            color: rgba(255, 255, 255, 0.2);
        }
        
        h2 {
            padding-left: 12px;
            font-size: 22px;
            text-transform: uppercase;
            padding-bottom: 5px;
            letter-spacing: 2px;
            display: inline-block;
            font-weight: 100;
        }
        
        h2:first-child {
            padding-left: 0px;
        }
        
        span {
            text-transform: uppercase;
            font-size: 15px;
            opacity: 1; 
            position: relative;
            top: -45px;
            transition: all 0.5s ease-in-out;
        }
        
        .text {
            border: none;
            width: 100%;
            padding: 10px 20px;
            display: block;
            height: 15px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0);
            overflow: hidden;
            margin-top: 15px;
            transition: all 0.5s ease-in-out;
        }
        
        .text:focus {
            outline: 0;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            background: rgba(0, 0, 0, 0);
        }
        
        .text:focus + span {
            opacity: 1;
        }
        
        input[type="text"],input[type="password"] {
            font-family: 'Montserrat', sans-serif;
            color: #fff;
        }
        input {
            display: inline-block;
            
            padding-top: 0%;
            
            font-size: 14px;
        }
        
        h2, span,.custom-checkbox {
            margin-left: 20px;
        }
        
        .custom-checkbox {
            -webkit-appearance: none;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 8px;
            border-radius: 2px;
            display: inline-block;
            position: relative;
            top: 6px;
        }
        
        .custom-checkbox:checked {
            background-color: rgba(17, 97, 237, 1);
        }
        
        .custom-checkbox:checked:after {
            content: '\2714';
            font-size: 10px;
            position: absolute;
            top: 1px;
            left: 4px;
            color: #fff;
        }
        
        .custom-checkbox:focus {
            outline: none;
        }
        
        label {
            display: inline-block;
            padding-top: 10px;
            padding-left: 5px;
        }
        
        .signin {
            background-color: #1161ed;
            color: #FFF;
            width: 100%;
            padding: 10px 20px;
            display: block;
            height: 39px;
            border-radius: 20px;
            margin-top: 60px;
            transition: all 0.5s ease-in-out;
            border: none;
            text-transform: uppercase;
        }
        
        .signin:hover {
            background: #4082f5;
            box-shadow: 0px 4px 35px -5px #4082f5;
            cursor: pointer;
        }
        
        .signin:focus {
            outline: none;
        }
        
        hr {
            border: 1px solid rgba(255, 255, 255, 0.1);
            top: 85px;
            position: relative;
        }
        
        a {
            text-align: center;
            display: block;
            top: 0%;
            position: relative;
            text-decoration: none;
            color: rgb(255, 255, 255);
        }
      </style>
    </head>
    <body class="antialiased">
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
                                    <li> <a href="{{ url('/') }}">Inicio</a> </li>
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
        </header>
        
        <div class="login">
            @if ( app('request')->input('token') == null )
                <a {{ url('/') }}>
                    <button type="submit" class="signin">
                        Regresa a Pagina Principal
                    </button>
                </a>
            @endif
            @if ( app('request')->input('token') !== null )
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="imagen">
                        <img center src="https://www.upeu.edu.pe/wp-content/uploads/2017/06/Logo-UPeU.png"  alt="imagen" height="150px" width="150px">
                    </div>
                    <form action="{{route('recuperar.contra')}}" method="POST">
                        @csrf
                        <input type="email" class="text" name="email" id="email" size="30" required >
                        <span>CORREO</span>
                        <br>
                        <br>
                        <input type="password" class="text" name="password" id="password"  pattern="[A-Za-z0-9]{8,20}" title="Letras y numeros. Tamaño minimo: 8. Tamaño maximo: 20"required>
                        <span>NUEVA CONTRASEÑA</span>
                        <br>
                        <button type="submit" class="signin">
                            Enviar Formulario
                        </button>
                        <hr>
                    </form>
                </div>
            @endif
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
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
