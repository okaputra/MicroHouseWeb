<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Admin CSS -->
    <!-- simplebar CSS-->
    <link href="officerAsset/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="officerAsset/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="officerAsset/assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="officerAsset/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="officerAsset/assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="officerAsset/assets/css/app-style.css" rel="stylesheet"/>
    
    

     <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

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
        {{-- <li class="nav-item">
            <a class="nav-link" id="navlink" href="applicanttable.php">Applicant</a>
        </li> --}}
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

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/img11.jpg" class="d-block w-100" style="height:700px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome to <i>--MICROhouse--</i></h5>
          <p>Using this web you can find your favorite <i>Residence</i> </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/img12.jpg" class="d-block w-100" style="height:700px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Easy to use</h5>
          <p>Using this web you can apply or submit New Residence</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/img1.jpg" class="d-block w-100"style="height:700px">
        <div class="carousel-caption d-none d-md-block">
          <h5>User Friendly</h5>
          <p>Easy to use, give user more best experience while using <i>MICROhouse</i> Web</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <br>
  <br>

  @if(auth()->user()->roles=='applicant')
  {{-- Advertise --}}
  <div class="row" style="margin:auto;margin-bottom:20px">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body" style="height:425px">
          <h5 class="card-title" style="text-align:center">Advertisement</h5>
          <img src="images/img1.jpg" class="d-block w-100" style="height:292px">
          <br>
          <a href="/rent" class="btn btn-warning">RM100.000</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body" style="height:425px">
          <h5 class="card-title" style="text-align:center">Advertisement</h5>
          <img src="images/img11.jpg" class="d-block w-100" style="height:292px">
          <br>
          <a href="/rent" class="btn btn-warning">RM200.000</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body" style="height:425px">
          <h5 class="card-title" style="text-align:center">Advertisement</h5>
          <img src="images/img12.jpg" class="d-block w-100" style="height:292px">
          <br>
          <a href="/rent" class="btn btn-warning">RM250.000</a>
        </div>
      </div>
    </div>
    <br>
    <div class="col-sm-4" style="margin-top:10px">
      <div class="card">
        <div class="card-body" style="height:425px">
          <h5 class="card-title" style="text-align:center">Advertisement</h5>
          <img src="images/img13.jpg" class="d-block w-100" style="height:292px">
          <br>
          <a href="/rent" class="btn btn-warning">RM300.000</a>
        </div>
      </div>
    </div>
    <br>
    <div class="col-sm-4" style="margin-top:10px">
      <div class="card">
        <div class="card-body" style="height:425px">
          <h5 class="card-title" style="text-align:center">Advertisement</h5>
          <img src="images/img14.jpg" class="d-block w-100" style="height:292px">
          <br>
          <a href="/rent" class="btn btn-warning">RM100.000</a>
        </div>
      </div>
    </div>
    <br>
    <div class="col-sm-4" style="margin-top:10px">
      <div class="card">
        <div class="card-body" style="height:425px">
          <h5 class="card-title" style="text-align:center">Advertisement</h5>
          <img src="images/img7.jpg" class="d-block w-100" style="height:292px">
          <br>
          <a href="/rent" class="btn btn-warning">RM100.000</a>
        </div>
      </div>
    </div>
  </div>
  @endif
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

  {{-- @if(auth()->user()->roles=='officer')
  <div id="wrapper">
 
    <!--Start sidebar-wrapper-->
     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
       <div class="brand-logo">
        <a href="index.html">
         <h5 class="logo-text">--MICROhouse--</h5>
       </a>
     </div>
     <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="index.html" class="waves-effect">
            <i class="zmdi zmdi-view-dashboard"></i> <span>ADMIN PANEL</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li><a href="/applicationAdminMenu"><i class="zmdi zmdi-star-outline"></i>Residence</a></li>
          </ul>
          <ul class="sidebar-submenu">
            <li><a href="/applicationAdminMenu"><i class="zmdi zmdi-star-outline"></i>Application</a></li>
          </ul>
        </li>
     </div>
     <!--End sidebar-wrapper-->
  
  <!--Start topbar header-->
  <header class="topbar-nav">
   <nav class="navbar navbar-expand fixed-top bg-white">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
         <i class="icon-menu menu-icon"></i>
       </a>
      </li>
    </ul>
       
    <ul class="navbar-nav align-items-center right-nav-link">
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
  </nav>
  </header>
  <!--End topbar header-->
  
  <div class="clearfix"></div>
    
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
        <div class="card-header border-0">
                  Residence List
                 <div class="table-responsive">
                  @foreach ($dataRes as $rs)
                   <table class="table align-items-center table-flush">
                    <thead>
                     <tr>
                       <th>Product</th>
                       <th>Photo</th>
                       <th>Product ID</th>
                       <th>Status</th>
                       <th>Amount</th>
                       <th>Completion</th>
                     </tr>
                     </thead>
                     <tr>
                      <td>s</td>
                      <td><img src="https://via.placeholder.com/1000x993" class="product-img" alt="product img"></td>
                      <td>#9405822</td>
                      <td><span class="btn btn-sm btn-outline-success btn-round btn-block">Paid</span></td>
                      <td>$ 1250.00</td>
                      <td><div class="progress shadow" style="height: 4px;">
                            <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                         </div></td>
                     </tr>
                   </table>
                   @endforeach
                 </div>
            </div>
          </div>
        </div><!--End Row-->
  
        <!--End Dashboard Content-->
  
      </div>
      <!-- End container-fluid-->
      
      </div><!--End content-wrapper-->
     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
     
    </div><!--End wrapper-->


    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
        <div class="card-header border-0">
                  Residence List
                 <div class="table-responsive">
           
                   <table class="table align-items-center table-flush">
                    <thead>
                     <tr>
                       <th>Product</th>
                       <th>Photo</th>
                       <th>Product ID</th>
                       <th>Status</th>
                       <th>Amount</th>
                       <th>Completion</th>
                     </tr>
                     </thead>
                     <tr>
                      <td>Iphone 5</td>
                      <td><img src="https://via.placeholder.com/1000x993" class="product-img" alt="product img"></td>
                      <td>#9405822</td>
                      <td><span class="btn btn-sm btn-outline-success btn-round btn-block">Paid</span></td>
                      <td>$ 1250.00</td>
                      <td><div class="progress shadow" style="height: 4px;">
                            <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                         </div></td>
                     </tr>  
                   </table>
                 </div>
            </div>
          </div>
        </div><!--End Row-->
  
        <!--End Dashboard Content-->
  
      </div>
      <!-- End container-fluid-->
      
      </div><!--End content-wrapper-->
     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
     
    </div><!--End wrapper-->
  
    <!-- Bootstrap core JavaScript-->
    <script src="officerAsset/assets/js/jquery.min.js"></script>
    <script src="officerAsset/assets/js/popper.min.js"></script>
    <script src="officerAsset/assets/js/bootstrap.min.js"></script>
    
    <!-- simplebar js -->
    <script src="officerAsset/assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="officerAsset/assets/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="officerAsset/assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="officerAsset/assets/js/app-script.js"></script>
    <!-- Chart js -->
    <script src="officerAsset/assets/plugins/Chart.js/Chart.min.js"></script>
    <!--Peity Chart -->
    <script src="officerAsset/assets/plugins/peity/jquery.peity.min.js"></script>
    <!-- Index js -->
    <script src="officerAsset/assets/js/index.js"></script>



  @endif --}}
</body>
</html>
