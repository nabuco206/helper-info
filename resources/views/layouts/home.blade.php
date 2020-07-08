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
</head>

<body>
  <!-- Sidenav -->
 
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">

      <div class="container-fluid">
        <!-- Brand -->
         
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">
          <a href="/"> <img src="{{ asset('/img/brand/UGI_BLANCO_2.gif') }}"></a>
        </a>
        <!-- Form -->
         <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Busqueda . . ." type="text" name="search">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
      <li class="nav-item dropdown">
                <ul class="navbar-nav">
        <li class="nav-item">
          
             @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                        <i class="ni ni-key-25"></i>
                        <span class="nav-link-inner--text">Ingresar</span>
                        </a>
                    @else
                                                   
                        <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                        <i class="ni ni-key-25"></i>
                        <span class="nav-link-inner--text">Ingresar</span>
                        </a>
                    @endauth
                </div>
            @endif
        </li>
        </ul>

        
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