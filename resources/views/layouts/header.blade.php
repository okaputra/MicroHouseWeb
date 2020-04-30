<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/awe-booking-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css')}}">

    <!-- MY FONTS -->
    <script src="{{ asset('js/sweetalert2.all.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylego.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demogo.css')}}">

    <!-- Admin CSS -->
    <!-- simplebar CSS-->
    <link href="{{ asset('officerAsset/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('officerAsset/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('officerAsset/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('officerAsset/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ asset('officerAsset/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ asset('officerAsset/assets/css/app-style.css')}}" rel="stylesheet"/>
    
    

     <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

    <title>MicroHouse|Dashboard</title>
</head>
<body>

  
    <!-- navigation bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class ="container">
    <a class="navbar-brand" href="/home">MicroHouse</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="navlink" href="/rent">Residence</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" id="navlink" href="/application">Application</a>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:597px">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        
    
        </ul>
    </div>
    </div>
    </nav>
    <!-- end of navbar -->
@yield('konten')



</body>
</html>
