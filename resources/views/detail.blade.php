<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
            <a class="nav-link" id="navlink" href="applicanttable.php">Applicant</a>
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

<div class="container">
    <div class="row" style="margin-top:109px">
        <div class="card" style="width: 100%;">
            <img src="{{ url('/data_file/'.$data->Image) }}" class="card-img-top" alt="">
          </div>
          <a href="/editResidence/{{$data->id}}" class="btn btn-success my-3">Edit Residence Detail</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">List</th>
                <th scope="col">Desciption</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Availability</td>
                <td>{{$data->Availability}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Address</td>
                <td>{{$data->Address}}</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Number of Unit</td>
                <td>{{$data->NumberOfUnit}}</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Unit Size</td>
                <td>{{$data->SizeUnit}}</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Monthly Rental</td>
                <td>{{$data->MonthlyRental}}</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Bedroom</td>
                <td>{{$data->Bedroom}}</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Bathroom</td>
                <td>{{$data->Bathroom}}</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Living Room</td>
                <td>{{$data->livingRoom}}</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Garage</td>
                <td>{{$data->Garage}}</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Pool</td>
                <td>{{$data->Pool}}</td>
              </tr>
            </tbody>
          </table>
  </div>
  @include('sweetalert::alert')


  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>