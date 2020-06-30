<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>LISTAS NEGRAS</title>
        <!-- base css -->
        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
  <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="{{ asset('dist/css/vendors.bundle.css') }}">
        <link rel="stylesheet" media="screen, print" href="{{ asset('dist/css/app.bundle.css') }}">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/img/favicon/apple-touch-icon.png') }}">
      
        <link rel="mask-icon" href="{{ asset('dist/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <link rel="stylesheet" media="screen, print" href="{{ asset('dist/css/datagrid/datatables/datatables.bundle.css') }}">
        <link rel="stylesheet" media="screen, print" href="{{ asset('dist/css/miscellaneous/fullcalendar/fullcalendar.bundle.css') }}">
        <link rel="stylesheet" media="screen, print" href="{{ asset('dist/css/statistics/chartjs/chartjs.css') }}">
        <link rel="stylesheet" media="screen, print" href="{{ asset('dist/css/formplugins/select2/select2.bundle.css') }}">
        <link rel="stylesheet" media="screen, print" href="{{ asset('dist/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}">
        @yield('linktema')
        <script src="https://kit.fontawesome.com/de9ddc80e1.js" crossorigin="anonymous"></script>
 <style type="text/css">
    .ov:hover{
      background-color: #3c8dbc;
    }
    #adminfinBody:hover{
      background-color: #28a745;
      opacity: .75;
    }
      #rhBody:hover{
      background-color: #00c0ef;
      opacity: .75;
    }
      #customerServiceBody:hover{
      background-color: #39CCCC;
      opacity: .75;
    }
      #comunityBody:hover{
      background-color: #f39c12;
      opacity: .75;
    }
      #lmsBody:hover{
      background-color: #3c8dbc;
      opacity: .75;
    }
      #proyectsBody:hover{
      background-color: #605ca8;
      opacity: .75;
    }
    .hexagono2{
          background-color: grey;
      height: 5.7735em;
      position: relative;
      width: 10em;
      -webkit-box-shadow: 10px 10px 11px -4px rgba(0,0,0,0.75);
      -moz-box-shadow: 10px 10px 11px -4px rgba(0,0,0,0.75);
      box-shadow: 10px 10px 11px -4px rgba(0,0,0,0.75);

    }
    .hexagono2:before {
      background: inherit;
      content: '';
      height: 100%;
      position: absolute;
      transform: rotate(-60deg);
      transform-origin: 50% 50%;
      width: 100%;
      top: 0;
      right: 0;
      bottom: 0;
      left:0;


    }
    .hexagono2:after {
      background: inherit;
      content: '';
      height: 100%;
      position: absolute;
      transform: rotate(60deg);
      transform-origin: 50% 50%;
      width: 100%;
      top: 0;
      right: 0;
      bottom: 0;
      left:0;
      
    
    }
   /* .hexagono2:hover{
      background-color: #3c8dbc;
    } */
    $hw : 110;
    $wh : ((50*$hw)/86)*1px;
    .hexagono{
  position: relative;
  display: block;
  background-color: black;
  width: $hw*1px;
  height: $wh;
  z-index: 999;
  /*border: 1px solid #000;
  //border-radius: 5%; */
  transition: all .5s ease-out;
  &:hover{
    transform: scale(1.2);
    transition: all .5s ease-out;
  }
  &::after{
    content: '';
    display: block;
    position: absolute;
    top: 0;
    width: inherit;
    height: inherit;
    transform: rotate(60deg);
    background-color: inherit;
    /*border-radius: 5%; */
  }
  &::before{
    content: '';
    display: block;
    position: absolute;
    top: 0px;
    width: inherit;
    height: inherit;
    transform: rotate(-60deg);
    background-color: inherit;
    /*border-radius: 5%; */

  }
}
.hexagono-content{
  position: absolute;
  z-index: 1000;
  width: 90%;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: 50%;
  transform: translate(0, -50%);
  text-align: center;
  font-weight: bold;
  line-height: 25px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  font-weight: normal;
  font-size: 1.3rem;
  strong{
    display: block;
  }
}

#desarrolloHex{
  background-color: grey;
}
.efecto:hover{
  
  opacity: .75;
}
  background-color: #28a745;
}
#colaboradorHex:hover{
  background-color: #28a745;
  opacity: .75;
}
#atraccionHex{
  background-color: #3c8dbc;
}
#atraccionHex:hover{
  background-color: #3c8dbc;
  opacity: .75;
}
#saludHex{
  background-color: #f56954;
}
#saludHex:hover{
  background-color: #f56954;
  opacity: .75;
}
#retencionHex{
  background-color: #605ca8;
}
#retencionHex:hover{
  background-color: #605ca8;
  opacity: .75;
}
#relacionesHex{
  background-color: #39CCCC;
}
#relacionesHex:hover{
  background-color: #39CCCC;
  opacity: .75;
}
#compensacionesHex{
  background-color: #f39c12;
}
#compensacionesHex:hover{
  background-color: #f39c12;
  opacity: .75;
}
#desarrolloHex{
  background-color: grey;
}
#desarrolloHex:hover{
  background-color: grey;
  opacity: .75;
}
  </style> 

</head>

<body class="mod-bg-1 ">
          <script>
            /**
             *  This script should be placed right after the body tag for fast execution 
             *  Note: the script is written in pure javascript and does not depend on thirdparty library
             **/
            'use strict';

            var classHolder = document.getElementsByTagName("BODY")[0],
                /** 
                 * Load from localstorage
                 **/
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {},
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            /** 
             * Load theme options
             **/
            if (themeSettings.themeOptions)
            {
                classHolder.className = themeSettings.themeOptions;
                console.log("%c✔ Theme settings loaded", "color: #148f32");
            }
            else
            {
                console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme'))
            {
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;
                document.getElementsByTagName('head')[0].appendChild(cssfile);
            }
            /** 
             * Save to localstorage 
             **/
            var saveSettings = function()
            {
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                {
                    return /^(nav|header|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme'))
                {
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }
            
            /** 
             * Reset settings
             **/
            var resetSettings = function()
            {
                localStorage.setItem("themeSettings", "");
            }

        </script>
 <!--@yield('scriptcolor') -->
  <div class="page-wrapper">
      <div class="page-inner">
           <aside class="page-sidebar">
              <div class="page-logo">
                  <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                      <img src="{{ asset('dist/img/siiimages/SII-04.png') }}" alt="SmartAdmin WebApp" aria-roledescription="logo" style="width: 40px !important;">
                      <span class="page-logo-text mr-1" aling="justify"><small>MENÚ <br>  MBGE    </small></span>
                      <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                      <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                  </a>
              </div>
              <nav id="js-primary-nav" class="primary-nav" role="navigation">
               
              </nav>
           </aside> 
          <div class="page-content-wrapper">
                    <header class="page-header" role="banner">
                        <!-- we need this logo when user switches to nav-function-top -->
                        <div class="page-logo">
                            <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                                <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                <span class="page-logo-text mr-1">SII</span>
                                <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                                <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                            </a>
                        </div>
                        <!-- DOC: nav menu layout change shortcut -->
                        <div class="hidden-md-down dropdown-icon-menu position-relative">
                            <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                                <i class="fas fa-bars"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                        <i class="fas fa-lock"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- DOC: mobile button appears during mobile width -->
                        <div class="hidden-lg-up">
                            <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                                <i class="ni ni-menu"></i>
                            </a>
                        </div>
                        <div class="search">
                            <form class="app-forms hidden-xs-down" role="search" action="page_search.html" autocomplete="off">
                                <input type="text" id="search-field" placeholder="Busca algo..." class="form-control" tabindex="1">
                                <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                                    <i class="fal fa-times"></i>
                                </a>
                            </form>
                        </div>
                        <div class="ml-auto d-flex">
                            <!-- activate app search icon (mobile) -->
                            <div class="hidden-sm-up">
                                <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                    <i class="fal fa-search"></i>
                                </a>
                            </div>
                            <!-- app settings -->
                            <div class="hidden-md-down">
                                <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                                    <i class="fal fa-cog"></i>
                                </a>
                            </div>

 
                            <!-- app user menu -->
                            <div>
                                <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                    
									<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">{{ Auth::user()->name }}</span>
									<i class="ni ni-chevron-down hidden-xs-down"></i> 
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
     
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                        <span data-i18n="drpdwn.settings">Configuracion</span>
                                    </a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                        <span data-i18n="drpdwn.fullscreen">Pantalla completa</span>
                                        <i class="float-right text-muted fw-n">F11</i>
                                    </a>
                                    <a href="#" class="dropdown-item" data-action="app-print">
                                        <span data-i18n="drpdwn.print">Imprimir</span>
                                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                                    </a>
          
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item fw-500 pt-3 pb-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span data-i18n="drpdwn.page-logout">Cerrar Sesion</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                </div>
                            </div>






                        </div>
                    </header>
                  <main id="js-page-content" role="main" class="page-content">
                    @yield('content')
                  </main>          

        <!-- BEGIN Messenger -->
        <div class="modal fade js-modal-messenger modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right">
             
            </div>
        </div>          





          </div>
      </div>
  </div>            
          <!-- BEGIN Page Settings -->
        <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-md">
                <div class="modal-content">
                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                        <h4 class="m-0 text-center color-white">
                            Opciones de Diseño
                            <small class="mb-0 opacity-80">Configuración de Interfaz de usuario</small>
                        </h4>
                        <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="settings-panel">
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Diseño de la aplicación
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="fh">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="header-function-fixed"></a>
                                <span class="onoffswitch-title">Encabezado Fijo</span>
                                <span class="onoffswitch-title-desc">El encabezado estará fijo en todo momento</span>
                            </div>
                            <div class="list" id="nff">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-fixed"></a>
                                <span class="onoffswitch-title">Navegación Fija</span>
                                <span class="onoffswitch-title-desc">Panel izquierdo fijo</span>
                            </div>
                            <div class="list" id="nfm">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-minify"></a>
                                <span class="onoffswitch-title">Navegación Minify</span>
                                <span class="onoffswitch-title-desc">Inclina la navegación para maximizar el espacio</span>
                            </div>
                            <div class="list" id="nfh">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-hidden"></a>
                                <span class="onoffswitch-title">Ocultar Navegación</span>
                                <span class="onoffswitch-title-desc">gira el mouse sobre el borde para mostrar navegación</span>
                            </div>
                            <div class="list" id="nft">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-top"></a>
                                <span class="onoffswitch-title">Navegación Superior</span>
                                <span class="onoffswitch-title-desc">Reubica el panel izquierdo hacia arriba</span>
                            </div>
                            <div class="list" id="mmb">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-main-boxed"></a>
                                <span class="onoffswitch-title">Diseño en caja</span>
                                <span class="onoffswitch-title-desc">Encapsula a un contenedor</span>
                            </div>
                            <div class="expanded">
                                <ul class="">
                                    <li>
                                        <div class="bg-fusion-50" data-action="toggle" data-class="mod-bg-1"></div>
                                    </li>
                                    <li>
                                        <div class="bg-warning-200" data-action="toggle" data-class="mod-bg-2"></div>
                                    </li>
                                    <li>
                                        <div class="bg-primary-200" data-action="toggle" data-class="mod-bg-3"></div>
                                    </li>
                                    <li>
                                        <div class="bg-success-300" data-action="toggle" data-class="mod-bg-4"></div>
                                    </li>
                                </ul>
                                <div class="list" id="mbgf">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-fixed-bg"></a>
                                    <span class="onoffswitch-title">Fixed Background</span>
                                </div>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Menú Móvil
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="nmp">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-push"></a>
                                <span class="onoffswitch-title">Contenido Presionado</span>
                                <span class="onoffswitch-title-desc">Contenido presionado en el menu mostrado</span>
                            </div>
                            <div class="list" id="nmno">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-no-overlay"></a>
                                <span class="onoffswitch-title">Sin Superposición</span>
                                <span class="onoffswitch-title-desc">Elimina la malla al revelar el menú</span>
                            </div>
                            <div class="list" id="sldo">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-slide-out"></a>
                                <span class="onoffswitch-title">Sin Canvas <sup>(beta)</sup></span>
                                <span class="onoffswitch-title-desc">Menú superpuesto de contenido</span>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Accesibilidad
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="mbf">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-bigger-font"></a>
                                <span class="onoffswitch-title">Fuente más grande</span>
                                <span class="onoffswitch-title-desc">fuente más grande para facilitar la lectura</span>
                            </div>
                            <div class="list" id="mhc">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-high-contrast"></a>
                                <span class="onoffswitch-title">Texto de alto contraste (WCAG 2 AA)</span>
                                <span class="onoffswitch-title-desc">4.5:1 Relación de contraste de texto</span>
                            </div>
                            <div class="list" id="mcb">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-color-blind"></a>
                                <span class="onoffswitch-title">Daltonismo <sup>(beta)</sup> </span>
                                <span class="onoffswitch-title-desc">deficiencia de la visión del color</span>
                            </div>
                            <div class="list" id="mpc">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-pace-custom"></a>
                                <span class="onoffswitch-title">Precargador dentro</span>
                                <span class="onoffswitch-title-desc">El precargador estará dentro del contenido</span>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Modificaciones Globales
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="mcbg">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-clean-page-bg"></a>
                                <span class="onoffswitch-title">Limpia el fondo de la página</span>
                                <span class="onoffswitch-title-desc">agrega más espacios en blanco</span>
                            </div>
                            <div class="list" id="mhni">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-nav-icons"></a>
                                <span class="onoffswitch-title">Oculta iconos de Navegación</span>
                                <span class="onoffswitch-title-desc">iconos de navegación invisibles</span>
                            </div>
                            <div class="list" id="dan">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-disable-animation"></a>
                                <span class="onoffswitch-title">Deshabilitar animación CSS</span>
                                <span class="onoffswitch-title-desc">deshabilitar las animaciones basadas en CSS</span>
                            </div>
                            <div class="list" id="mhic">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-info-card"></a>
                                <span class="onoffswitch-title">Ocultar tarjeta de información</span>
                                <span class="onoffswitch-title-desc">ocultar la tarjeta de información del panel izquierdo</span>
                            </div>
                            <div class="list" id="mlph">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-lean-subheader"></a>
                                <span class="onoffswitch-title"> Inclinar subtitulo</span>
                                <span class="onoffswitch-title-desc">encabezado de página distinguido</span>
                            </div>
                            <div class="list" id="mnl">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-link"></a>
                                <span class="onoffswitch-title">Navegación jerárquica</span>
                                <span class="onoffswitch-title-desc">desglose de enlaces de navegación</span>
                            </div>
                            <div class="list mt-1">
                                <span class="onoffswitch-title">Tamaño de fuente global<small>(Reestablece al actualizar)</small> </span>
                                <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-sm" data-target="html">
                                        <input type="radio" name="changeFrontSize"> CH
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text" data-target="html">
                                        <input type="radio" name="changeFrontSize" checked=""> MD
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-lg" data-target="html">
                                        <input type="radio" name="changeFrontSize"> GD
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-xl" data-target="html">
                                        <input type="radio" name="changeFrontSize"> XG
                                    </label>
                                </div>
                                <span class="onoffswitch-title-desc d-block mb-g">Cambiar el tamaño de fuente <strong>raíz</strong> para efectuar valores rem</span>
                            </div>
                            <!-- <div class="mt-2 d-table w-100 pl-5 pr-3">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Theme colors <small>(overlays base css)</small>
                                    </h5>
                                    <div class="fs-xs text-muted p-2 alert alert-warning mt-3 mb-0">
                                        <i class="fal fa-exclamation-triangle text-warning mr-2"></i>Due to network latency and CPU utilization, you may experience a brief flickering effect on page load which may show the intial applied theme for a split second. Setting the prefered style/theme in the header will prevent this from happening.
                                    </div>
                                </div>
                            </div>
                            <div class="expanded theme-colors pl-5 pr-3">
                                <ul class="m-0">
                                    <li><a href="#" id="myapp-0" data-action="theme-update" data-themesave data-theme="" data-toggle="tooltip" data-placement="top" title="Wisteria (base css)" data-original-title="Wisteria (base css)"></a></li>
                                    <li><a href="#" id="myapp-1" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-1.css" data-toggle="tooltip" data-placement="top" title="Tapestry" data-original-title="Tapestry"></a></li>
                                    <li><a href="#" id="myapp-2" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-2.css" data-toggle="tooltip" data-placement="top" title="Atlantis" data-original-title="Atlantis"></a></li>
                                    <li><a href="#" id="myapp-3" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-3.css" data-toggle="tooltip" data-placement="top" title="Indigo" data-original-title="Indigo"></a></li>
                                    <li><a href="#" id="myapp-4" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-4.css" data-toggle="tooltip" data-placement="top" title="Dodger Blue" data-original-title="Dodger Blue"></a></li>
                                    <li><a href="#" id="myapp-5" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-5.css" data-toggle="tooltip" data-placement="top" title="Tradewind" data-original-title="Tradewind"></a></li>
                                    <li><a href="#" id="myapp-6" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-6.css" data-toggle="tooltip" data-placement="top" title="Cranberry" data-original-title="Cranberry"></a></li>
                                    <li><a href="#" id="myapp-7" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-7.css" data-toggle="tooltip" data-placement="top" title="Oslo Gray" data-original-title="Oslo Gray"></a></li>
                                    <li><a href="#" id="myapp-8" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-8.css" data-toggle="tooltip" data-placement="top" title="Chetwode Blue" data-original-title="Chetwode Blue"></a></li>
                                    <li><a href="#" id="myapp-9" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-9.css" data-toggle="tooltip" data-placement="top" title="Apricot" data-original-title="Apricot"></a></li>
                                    <li><a href="#" id="myapp-10" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-10.css" data-toggle="tooltip" data-placement="top" title="Blue Smoke" data-original-title="Blue Smoke"></a></li>
                                    <li><a href="#" id="myapp-11" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-11.css" data-toggle="tooltip" data-placement="top" title="Green Smoke" data-original-title="Green Smoke"></a></li>
                                    <li><a href="#" id="myapp-12" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-12.css" data-toggle="tooltip" data-placement="top" title="Wild Blue Yonder" data-original-title="Wild Blue Yonder"></a></li>
                                    <li><a href="#" id="myapp-13" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-13.css" data-toggle="tooltip" data-placement="top" title="Emerald" data-original-title="Emerald"></a></li>
                                </ul>
                            </div>
                            <hr class="mb-0 mt-4">
                            <div class="pl-5 pr-3 py-3 bg-faded">
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <a href="#" class="btn btn-outline-danger fw-500 btn-block" data-action="app-reset">Reset Settings</a>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <a href="#" class="btn btn-danger fw-500 btn-block" data-action="factory-reset">Factory Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <span id="saving"></span>
                    </div>
                </div>
            </div>
        </div> <!-- END Page Settings -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('dist/js/vendors.bundle.js') }}"></script>
<script src="{{ asset('dist/js/app.bundle.js') }}"></script>
<script type="text/javascript">
    /* Activate smart panels */
    $('#js-page-content').smartPanel();

</script>
<!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
<script src="{{ asset('dist/js/statistics/peity/peity.bundle.js') }}"></script>
<script src="{{ asset('dist/js/statistics/flot/flot.bundle.js') }}"></script>
<script src="{{ asset('dist/js/statistics/easypiechart/easypiechart.bundle.js') }}"></script>
<script src="{{ asset('dist/js/datagrid/datatables/datatables.bundle.js') }}"></script>
 <script src="{{ asset('dist/js/datagrid/datatables/datatables.export.js') }}"></script>
 <script src="{{ asset('dist/js/dependency/moment/moment.js') }}"></script>
 <script src="{{ asset('dist/js/miscellaneous/fullcalendar/fullcalendar.bundle.js') }}"></script>
 <script src="{{ asset('dist/js/statistics/chartjs/chartjs.bundle.js') }}"></script>
 <script src="{{ asset('dist/js/formplugins/select2/select2.bundle.js') }}"></script>
 <script src="{{ asset('dist/js/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
<!-- <script>
  $(document).ready(function() {
       

  });
</script>-->
 @yield('scriptpage')
</body>
</html>
