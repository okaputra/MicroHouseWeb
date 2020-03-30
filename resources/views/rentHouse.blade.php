<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
            <a class="nav-link" id="navlink" href="/application">Application</a>
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

{{-- <div class="jumbotron jumbotron-fluid" style="background-image:url(images/img1.jpg)">

    <div class="container text-center">
    
      <h1 class="display-4">MicroHouse</h1>
      
      
    </div>
</div> --}}

<div class="container">
    <div class="row" style="margin-top:109px">
    <div class="col text-left">
    <h1>Residence List</h1>
    </div>
    <div class="row">
      <div class="col">
        <!-- Button trigger modal -->
        <a href="/addRes" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" style="margin-right:20px">
            Add Residence
        </a>
        <br>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Details Residence Information</h5>
        </div>
        <div class="modal-body">
          <form action="/storeNewR" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="address">Address</label>
                <input type="address" class="form-control" id="address" name="adr" required>
              </div>
              <div class="form-group">
                <label for="NumUnit">Number of Unit</label>
                <input type="NumUnit" class="form-control" id="NumUnit" name="nou" required>
              </div>
              <div class="form-group">
                <label for="SizePerUnit">Size per Unit</label>
                <input type="SizePerUnit" class="form-control" id="SizePerUnit" name="spu" required>
              </div>
              <div class="form-group">
                <label for="MonthlyRental">Monthly Rental</label>
                <input type="MonthlyRental" class="form-control" id="MonthlyRental" name="mRn" required>
              </div>
              <div class="form-group">
                <label for="availability">Availability</label>
                <input type="availability" class="form-control" id="availability" name="ava" required>
              </div>
              <div class="form-group">
                <label for="bedroom">Bedroom</label>
                <input type="bedroom" class="form-control" id="bedroom" name="bed" required>
              </div>
              <div class="form-group">
                <label for="bathroom">Bathroom</label>
                <input type="bathroom" class="form-control" id="bathroom" name="bath" required>
              </div>
              <div class="form-group">
                <label for="livingroom">Living room</label>
                <input type="livingroom" class="form-control" id="livingroom" name="liv" required>
              </div>
              <div class="form-group">
                <label for="garage">Garage</label>
                <input type="garage" class="form-control" id="garage" name="gar" required>
              </div>
              <div class="form-group">
                <label for="pool">Pool</label>
                <input type="pool" class="form-control" id="pool" name="pol" required>
              </div>
                <div class="form-group">
                  <label for="residencefoto">Residence Photo</label>
                  <input type="file" class="form-control-file" id="residencefoto" name="file">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
      </div>
      
    </div>
    </div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th width="1%">Preview</th>
          <th>Information Status</th>
          <th style="width:183px">OPSI</th>
        </tr>
      </thead>
      <tbody>
        @foreach($residence as $rs)
        <tr>
          <td><img width="150px" src="{{ url('/data_file/'.$rs->Image) }}"></td>
          <td>{{$rs->Availability}}</td>
          <td><a href="/showDetail/{{ $rs->id }}" class="btn btn-success" >DETAIL</a> <a href="/delete/{{ $rs->id }}" class="btn btn-danger delRes" >DELETE</a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <br>
  </div>
  </div>
  @include('sweetalert::alert')
  {{-- <footer class="bg-dark text-white pt-3 mt-4">
      <div class="container ">
        <div class="row text-center">
        
        <div class="col ">
          <p>copyright MicroHouse Web 2020</p>
          
        </div>
      </div>
      </div>
    </footer> --}}
    <script>
      $('.delRes').on('click',function(e){
        e.preventDefault();
        const tombolDelete = $(this).attr('href');
        Swal.fire({
          title: 'Are you sure?',
          text: "Residence detail will be Deleted!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#09bf25',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Delete!'
          }).then((result) => {
          if (result.value) {
            document.location.href = tombolDelete;
          }else{
            Swal.fire({
            title: 'Canceled!',
            icon: 'error',
            timer: 1300,
            showConfirmButton: false, 
            })
          }
        })
      });

    </script>
  
  
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>