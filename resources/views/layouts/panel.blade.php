<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>UGI | Reg.Valparaiso</title>
  <!-- Favicon -->
  <link href="{{ asset('img/brand/favicon.png')  }} " rel="icon" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('css/argon.css?v=1.0.0') }}" rel="stylesheet">



  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>



</head>

<body>
  <!-- Sidenav -->
  <!-- MENU NAV  @ include('include.panel.menu_izq') -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
       
         <img src="{{ asset('/img/brand/UGI_BLANCO_2.gif') }}" />
        <!-- Form -->
         <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Buscar" type="text" name="search">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
      <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <!--<span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="{{ asset('img/theme/team-1-800x800.jpg')}}">
            </span>-->
            <div class="media-body ml-2 d-none d-lg-block">
              <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }} - {{ auth()->user()->fiscalia }}  </span>
            </div>
          </div>
        </a>
        <!--Cerrar Sesion  -->
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          @if (auth()->user()->rol== 'ADMIN')
           <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Bienvenido!</h6>
           </div>
           <a href="{{ route('index') }}" class="dropdown-item">
            <i class="ni ni-settings"></i>
            <span>Mantenedor</span>
           </a>
          @endif
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
           document.getElementById('logout-form').submit();"> <i class="ni ni-user-run"></i> {{ __('Cerrar Sesión') }}  </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
           </form>
        </div>                            

      </li>
    </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-4 pt-md-6">
     
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
     @yield('content')
      <!-- Footer -->
     @include('include.panel.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('js/argon.js?v=1.0.0')}}"></script>
</body>

</html>