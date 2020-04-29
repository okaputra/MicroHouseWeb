@extends('layouts.header')
@section('konten')

<div class="container">
    <div class="row" style="margin-top:109px">
        <div class="card" style="width: 50%;">
            <img src="{{ url('/data_file/'.$data->Image) }}" class="card-img-top" alt="">
          </div>
          <div style="margin-left:44px">
            <h5 class="btn btn-outline-secondary btn-square waves-effect waves-light m-1">{{$data->Availability}}</h5><br>
            <h1>{{$data->HouseName}}</h1> <br>
            <h3 style="color:red">{{$data->MonthlyRental}}<span style="color:black">/month</span></h3>  <br>
            <hr style="margin-top:10px;margin-bottom:10px; width:526px">
            @if(auth()->user()->roles=='applicant')
            <a href="/submitApplication/{{$data->id}}" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModalApplicationScrollable" style="margin-right:20px">
              Submit Application
            </a>
            @endif
            @if(auth()->user()->roles=='officer')
              <a href="/editResidence/{{$data->id}}" class="btn btn-success my-3">Edit Residence Detail</a>
            @endif

          </div>
          {{-- <div style="margin-top:26px;"> --}}
            <div style="margin-top:31px">
              <h1>DESCRIPTION</h1>
              <table class="table table-borderless" style="margin-right:264px">
                <thead>
                  <tr>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>House Name  :</td>
                    <td> <b><i>{{$data->HouseName}}</i></b> </td>
                  </tr>
                  <tr>
                    <td>Address  :</td>
                    <td><b><i>{{$data->Address}}</i></b></td>
                  </tr>
                  <tr>
                    <td>Number of Unit  :</td>
                    <td><b><i>{{$data->NumberOfUnit}}</i></b></td>
                  </tr>
                  <tr>
                    <td>Unit Size  :</td>
                    <td><b><i>{{$data->SizeUnit}}</i></b></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <div>
              <table class="table table-borderless" style="margin-top:81px;margin-right:276px; border-left:1px solid grey;">
                <thead>
                  <tr>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Bedroom  :</td>
                    <td><b><i>{{$data->Bedroom}}</i></b></td>
                  </tr>
                  <tr>
                    <td>Bathroom  :</td>
                    <td><b><i>{{$data->Bathroom}}</i></b></td>
                  </tr>
                  <tr>
                    <td>Living Room  :</td>
                    <td><b><i>{{$data->livingRoom}}</i></b></td>
                  </tr>
                  <tr>
                    <td>Garage  :</td>
                    <td><b><i>{{$data->Garage}}</i></b></td>
                  </tr>
                  <tr>
                    <td>Pool  :</td>
                    <td><b><i>{{$data->Pool}}</i></b></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalApplicationScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Details Application Information</h5>
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
                          <input type="hidden" class="form-control" id="stts" name="status" value="Waiting">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="idRes" name="idres" value="{{$data->id}}">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="usrID" name="idUser" value="{{auth()->user()->id}}">
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
  @include('sweetalert::alert')


  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection