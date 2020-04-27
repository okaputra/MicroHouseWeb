@extends('layouts.header')
@section('konten')

  <div class="container">
    <div class="row" style="margin-top:109px">
        @foreach ($application as $apk)
        <form action="/updateApplication" method="POST" style="width:100%">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="ApplicationDate">Application Date</label>
                <input type="hidden" class="form-control" id="id" value="{{$apk->id}}" name="id">
                <input type="date" class="form-control" id="apkDate" value="{{$apk->applicationDate}}" name="apkDate">
              </div>
              <div class="form-group">
                <label for="RequiredMonth">Required Month</label>
                <input type="text" class="form-control" id="RQMonth" value="{{$apk->requiredMonth}}" name="rqMonth">
              </div>
              <div class="form-group">
                <label for="RequiredYear">Required Year</label>
                <input type="text" class="form-control" id="RQYear" value="{{$apk->requiredYear}}" name="rqYear">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" id="status" value="{{$apk->status}}" name="sts">
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