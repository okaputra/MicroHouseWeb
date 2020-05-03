@extends('layouts.header')
@section('konten')

<div class="container">
    <div class="row" style="margin-top:109px">
    <div class="col text-left">
    <h1>Residence List</h1>
    </div>
    <div class="row">
      <div class="col">
        <!-- Button trigger modal -->
        @if(auth()->user()->roles=='officer')
        <a href="/addRes" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" style="margin-right:20px">
            Set up New Residence
        </a>
        @endif
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
                <label for="houseName">House Name</label>
                <input type="houseName" class="form-control" id="hsname" name="hsName" required>
              </div>
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
                <input type="hidden" class="form-control" id="availability" name="ava" value="Available">
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
    @if(auth()->user()->roles=='officer')
    <br>
     <div class="table-responsive">
      
       <table class="table align-items-center table-flush">
        <thead>
         <tr>
           <th>Residence ID</th>
           <th>House Name</th>
           <th>Address</th>
           <th>Photo</th>
           <th>Monthly  Rental</th>
           <th style="text-align:center">Availability</th>
           <th style="text-align:center">OPTION</th>
         </tr>
         </thead>
         @foreach ($residence as $rs)
         <tr>
          <td>{{$rs->id}}</td>
          <td>{{$rs->HouseName}}</td>
          <td>{{$rs->Address}}</td>
          <td><img src="{{ url('/data_file/'.$rs->Image) }}" class="product-img" alt="product img"></td>
          <td>{{$rs->MonthlyRental}}</td>
          <td><span class="btn btn-sm btn-outline-success btn-round btn-block">{{$rs->Availability}}</span></td>
          <td style="text-align:center"><a href="/showDetail/{{ $rs->id }}" class="btn btn-success waves-effect waves-light m-1"> <i class="fa fa-search"></i> <span>DETAIL</span> </a><a href="/delete/{{ $rs->id }}" class="btn btn-outline-danger btn-square waves-effect waves-light m-1 delRes"> <i class="fa fa fa-trash-o"></i> <span>DELETE</span></a></td>
        </tr>  
        @endforeach
       </table>
     </div>
    </div>
    @endif

    @if(auth()->user()->roles=='applicant')
      @foreach($residence as $rs)
      <div class="hotel-item">
        <div class="item-media">
            <div class="image-cover">
                <img src="{{ url('/data_file/'.$rs->Image) }}" alt="">
            </div>
        </div>
        <div class="item-body">
            <div class="item-title">
                <h2>
                    <a href="/showDetail/{{ $rs->id }}">{{$rs->HouseName}}</a>
                </h2>
            </div>
            <div class="item-hotel-star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="item-address">
              <img style="height:19px" src="{{url('images/mrk.png')}}" alt="">
                {{$rs->Address}}
            </div>
            <div class="item-footer">
              <div class="item-rate">
                <span>{{$rs->Availability}}</span>
              </div>
            </div>
        </div>
        <div class="item-price-more">
            <div class="price">
                per month
                <span class="amount">{{$rs->MonthlyRental}}</span>
            </div>
            <a href="/showDetail/{{ $rs->id }}" class="awe-btn">DETAIL INFO</a>
        </div>
    </div>
    @endforeach
  <!-- END / ITEM -->
  @endif

    <br>
  </div>
  </div>
  @include('sweetalert::alert')

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

@endsection