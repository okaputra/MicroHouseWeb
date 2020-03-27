<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- MY FONTS -->
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    

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
                    <a class="nav-link" id="navlink" href="/application">Applicantion</a>
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
                @foreach ($residence as $rs)
                <form action="/updateResidence" method="POST" style="width:100%"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="hidden" class="form-control" id="address" value="{{$rs->id}}" name="id">
                        <input type="address" class="form-control" id="address" value="{{$rs->Address}}" name="adrr">
                      </div>
                      <div class="form-group">
                        <label for="NumUnit">Number of Unit</label>
                        <input type="NumUnit" class="form-control" id="NumUnit" value="{{$rs->NumberOfUnit}}" name="nouu">
                      </div>
                      <div class="form-group">
                        <label for="SizePerUnit">Size per Unit</label>
                        <input type="SizePerUnit" class="form-control" id="SizePerUnit" value="{{$rs->SizeUnit}}" name="spuu">
                      </div>
                      <div class="form-group">
                        <label for="MonthlyRental">Monthly Rental</label>
                        <input type="MonthlyRental" class="form-control" id="MonthlyRental" value="{{$rs->MonthlyRental}}" name="mRnn">
                      </div>
                      <div class="form-group">
                        <label for="availability">Availability</label>
                        <input type="availability" class="form-control" id="availability" value="{{$rs->Availability}}" name="avaa">
                      </div>
                      <div class="form-group">
                        <label for="bedroom">Bedroom</label>
                        <input type="bedroom" class="form-control" id="bedroom" value="{{$rs->Bedroom}}" name="bedd">
                      </div>
                      <div class="form-group">
                        <label for="bathroom">Bathroom</label>
                        <input type="bathroom" class="form-control" id="bathroom" value="{{$rs->Bathroom}}" name="bathh">
                      </div>
                      <div class="form-group">
                        <label for="livingroom">Living room</label>
                        <input type="livingroom" class="form-control" id="livingroom" value="{{$rs->livingRoom}}" name="livv">
                      </div>
                      <div class="form-group">
                        <label for="garage">Garage</label>
                        <input type="garage" class="form-control" id="garage" value="{{$rs->Garage}}" name="garr">
                      </div>
                      <div class="form-group">
                        <label for="pool">Pool</label>
                        <input type="pool" class="form-control" id="pool" value="{{$rs->Pool}}" name="poll">
                      </div>
                        <div class="form-group">
                          <label for="residencefoto">Residence Photo</label>
                          <input type="file" class="form-control-file" id="residencefoto" name="filee" required>
                        </div>
                        <div class="footer">
                          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    @endforeach
            </div>
            </div>
            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>