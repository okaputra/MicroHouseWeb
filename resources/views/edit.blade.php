@extends('layouts.header')
@section('konten')

<div class="container">
  <div class="row" style="margin-top:109px">
      @foreach ($residence as $rs)
      <form action="/updateResidence" method="POST" style="width:100%"  enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="HouseName">House Name</label>
              <input type="hidden" class="form-control" id="address" value="{{$rs->id}}" name="id">
              <input type="housename" class="form-control" id="hsname" value="{{$rs->HouseName}}" name="hsNamee">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="address" class="form-control" id="address" value="{{$rs->Address}}" name="adrr">
            </div>
            <div class="form-group">
              <label for="NumUnit">Number of Unit</label>
              <input type="NumUnit" class="form-control" id="NumUnit" value="{{$rs->UnitNumber}}" name="nouu">
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
                <input type="file" class="form-control-file" value="{{ url('/data_file/'.$rs->Image) }}" id="residencefoto" name="filee" required>
              </div>
              <div class="footer">
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
  
@endsection