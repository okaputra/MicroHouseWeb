<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- MY FONTS -->
    
    

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
            <a class="nav-link" id="navlink" href="/rent">Rent House</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" id="navlink" href="applicanttable.php">Application</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" id="navlink" href="#aboutus">About Us</a>
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

<div class="jumbotron jumbotron-fluid" style="background-image:url(images/img1.jpg)">

  <div class="container text-center">
  
    <h1 class="display-4">MicroHouse</h1>
    
    
  </div>
</div>

<div class="container" id="aboutus">
  <div class="row">
  <div class="col text-center">
  <h1>About Us</h1>
  </div>
  </div>
  <div class="row">
  <div class="col text-center">
  <img src="img/img2.jpg" width ="250" class="rounded-circle">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   </div>
   <div class="col text-center">
  <img src="img/img4.jpg" width ="200" class="rounded-circle">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   </div>
  </div>
</div>
  
  {{-- <section id="contact" class="contact">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          
          <h2>Contact Us</h2>


        </div>

      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card text-white bg-primary mb-3 text-center" >
            
            <div class="card-body text-center">
              <h5 class="card-title">Contact</h5>
              <p class="card-text">Our Details Contact Here.</p>

            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"><h5>Location</h5></li>
            <li class="list-group-item">Our Office</li>
            <li class="list-group-item">Kuala Lumpur,Malaysia</li>
            <li class="list-group-item">Phone +612345678</li>
          </ul>

        </div>

        <div class="col-lg-6">
          <form>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email">
              <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
             <div class="form-group">
              <label for="message">message</label>
             <textarea name="message" id="message" class="form-control"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
                    
        </div>

      </div>

    </div>

  </section>

  <footer class="bg-dark text-white pt-3 mb-4">
    {{-- <div class="container ">
      <div class="row text-center">
      
      <div class="col ">
        <p>copyright MicroHouse Web 2020</p>
        
      </div>
    </div>
    </div> --}}
  {{-- </footer> --}}
















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>