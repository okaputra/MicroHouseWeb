@extends('layouts.header')
@section('konten')

<div class="container">
    <div class="row" style="margin-top:109px">
          {{-- show when user login as applicant --}}
          @if(auth()->user()->roles=='applicant')
            <a href="/editApplication/{{$detailApk->id}}" class="btn btn-success my-3">Edit Application Detail</a>
          @endif

          {{-- show when user login as officer --}}
          @if(auth()->user()->roles=='officer')
            <a href="/submitAllocate/{{$detailApk->id}}" style="margin-left:5px" class="btn btn-warning my-3" data-toggle="modal" data-target="#exampleModalAllocateScrollable">Allocate</a>
            <a href="/reject/{{$detailApk->id}}" style="margin-left:5px" class="btn btn-danger my-3 reject" data-toggle="modal" data-target="#exampleModalRejectScrollable">REJECT</a>
          @endif
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
                <td>Application Date</td>
                <td>{{$detailApk->applicationDate}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Required Month</td>
                <td>{{$detailApk->requiredMonth}}</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Required Year</td>
                <td>{{$detailApk->requiredYear}}</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Residence ID</td>
                <td>{{$detailApk->residenceID}}</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Applicant ID</td>
                <td>{{$detailApk->user_id}}</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Status</td>
                <td>{{$detailApk->status}}</td>
              </tr>
            </tbody>
          </table>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalRejectScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">REJECT APPLICATION</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/reject" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                          <label for="AloDate">Are You Sure to reject?</label>
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="id" name="id" value="{{$detailApk->id}}">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="statusReject" name="statusReject" value="Rejected">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                          <button type="submit" id="approve" class="btn btn-primary">Reject</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalAllocateScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Allocation Detail</h5>
                </div>
                <div class="modal-body">
                  <form action="/submitAllocate" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                          <label for="AloDate">Start From</label>
                          <input type="date" class="form-control" id="aloDate" name="allocationDate" required>
                        </div>
                        <div class="form-group">
                          <label for="endDate">Until</label>
                          <input type="date" class="form-control" id="endDate" name="endDateAlo" required>
                        </div>
                        <div class="form-group">
                          <label for="duration">Duration</label>
                          <input type="text" class="form-control" id="duration" name="Duration" required>
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="applicationID" name="applicationID" value="{{$detailApk->id}}">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="status" name="status" value="Allocated">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                          <button type="submit" id="approve" class="btn btn-primary">Allocate</button>
                        </div>
                    </form>
                </div>    
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