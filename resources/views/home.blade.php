@extends('layouts.header')
@section('konten')

  @if(auth()->user()->roles=='officer')
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">WELCOME BACK! OFFICER</h1>
      <p class="lead" style="text-align:center;color:white">What do you want today? i hope u have a nice day!</p>
      <p class="lead" style="text-align:center">
        <a class="btn btn-primary btn-lg" href="/rent" role="button">View Residence</a>
        <a class="btn btn-info btn-lg" href="/application" role="button">View Application</a>
      </p>
    </div>
  </div>
  @endif



    @if(auth()->user()->roles=='applicant')
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
    @endif

    <br>
    @if(auth()->user()->roles=='applicant')
    <h1 style="text-align:center"><strong>ADVERTISEMENT</strong></h1>
    <br>
    {{-- Advertise --}}
    <div class="row" style="margin:auto;margin-bottom:20px">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body" style="height:425px">
            <h5 class="card-title" style="text-align:center">WhiteHouse</h5>
            <img src="images/img1.jpg" class="d-block w-100" style="height:292px">
            <br>
            <a href="/rent" class="btn btn-warning">RM100.000</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body" style="height:425px">
            <h5 class="card-title" style="text-align:center">redBullHouse</h5>
            <img src="images/img11.jpg" class="d-block w-100" style="height:292px">
            <br>
            <a href="/rent" class="btn btn-warning">RM200.000</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body" style="height:425px">
            <h5 class="card-title" style="text-align:center">MonococHouse</h5>
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
            <h5 class="card-title" style="text-align:center">SilviaHouse</h5>
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
            <h5 class="card-title" style="text-align:center">iluminatiHouse</h5>
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
            <h5 class="card-title" style="text-align:center">caesarHouse</h5>
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
@endsection
