@extends('layouts.header')
@section('konten')
    
    <div class="container">
        <div class="row" style="margin-top:109px">
            <div class="col text-left">
                <h1>Application List</h1>
            </div>
            <div class="row">
                <div class="col">
                    <br>
                </div>
                  <div class="modal fade" id="exampleModalApplicationScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                </div>
            </div>
        </div>
    </div>
    @if(auth()->user()->roles=='applicant')
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th width="15%">Application ID</th>
          <th style="text-align:center">Information Status</th>
          <th style="width:183px; text-align:center">OPTION</th>
        </tr>
      </thead>
      <tbody>
        @foreach($application as $apk)
        <tr>
          <td>{{$apk->id}}</td>
          <td><span class="btn btn-sm btn-outline-success btn-round btn-block" style="width:200px">{{$apk->status}}</span></td>
          <td><a href="/apkDetail/{{ $apk->id }}" class="btn btn-outline-primary btn-square waves-effect waves-light m-1"> <i class="fa fa-search"></i> <span>DETAIL</span> </a> <a href="/deleteApk/{{ $apk->id }}" class="btn btn-danger waves-effect waves-light m-1 delApk"> <i class="fa fa fa-trash-o"></i> <span>DELETE</span> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif

    @if(auth()->user()->roles=='officer')
      <div class="table-responsive">
       
        <table class="table align-items-center table-flush">
         <thead>
          <tr>
            <th>Application ID</th>
            <th>Information Date</th>
            <th style="text-align:center">OPTION</th>
          </tr>
          </thead>
          @foreach ($application as $apk)
          <tr>
           <td>{{$apk->id}}</td>
           <td>{{$apk->applicationDate}}</td>
           <td style="text-align:center"><a href="/apkDetail/{{ $apk->id }}" class="btn btn-success waves-effect waves-light m-1"> <i class="fa fa-search"></i> <span>DETAIL</span> </a><a href="/deleteApk/{{ $apk->id }}" class="btn btn-outline-danger waves-effect waves-light m-1 delApk"> <i class="fa fa fa-trash-o"></i> <span>DELETE</span></a></td>
         </tr>  
         @endforeach
        </table>
      </div>
     </div>
    @endif
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
@endsection