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

    <div class="container">
        <div class="row" style="margin-top:109px">
            <div class="col text-left">
                <h1>Application List</h1>
            </div>
            <div class="row">
                <div class="col">
                    <a href="/submitApplication" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalApplicationScrollable" style="margin-right:20px">
                        Submit Application
                    </a>
                    <br>
                </div>
                
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalApplicationScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">Details Residence Information</h5>
                        </div>
                        <div class="modal-body">
                          <form action="/submitApplication" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group">
                                  <label for="ApkDate">Application Date</label>
                                  <input type="date" class="form-control" id="apkDate" name="applicationDate" required>
                                </div>
                                <div class="form-group">
                                  <label for="RqMonth">Required Month</label>
                                  <input type="text" class="form-control" id="RqMonth" name="requiredMonth" required>
                                </div>
                                <div class="form-group">
                                  <label for="RqYear">Required Year</label>
                                  <input type="text" class="form-control" id="RqYear" name="requiredYear" required>
                                </div>
                                <div class="form-group">
                                  <label for="status">Status</label>
                                  <input type="text" class="form-control" id="stts" name="status" required>
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
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th width="15%">Application ID</th>
          <th style="text-align:center">Information Status</th>
          <th style="width:183px; text-align:center">OPSI</th>
        </tr>
      </thead>
      <tbody>
        @foreach($application as $apk)
        <tr>
          <td>{{$apk->id}}</td>
          <td>{{$apk->status}}</td>
          <td><a href="/apkDetail/{{ $apk->id }}" class="btn btn-success" >DETAIL</a> <a href="/deleteApk/{{ $apk->id }}" class="btn btn-danger delApk" >DELETE</a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @include('sweetalert::alert')
  
  
  <script>
    $('.delApk').on('click',function(e){
      e.preventDefault();
      const delButton = $(this).attr('href');
      Swal.fire({
        title: 'Are you sure?',
        text: "Application detail will be Deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#09bf25',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete!'
        }).then((result) => {
        if (result.value) {
          document.location.href = delButton;
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