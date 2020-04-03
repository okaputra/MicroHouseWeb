<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/mainLog.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up - MicroHouse</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>--MICROHouse--</h1>
      </div>
      <div class="login-box"  style="min-height:600px">
        <form class="login-form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
          <div class="form-group">
            <label class="control-label">NAME</label>
            <input class="form-control {{ $errors->has('name') ? 'is-invalid': ' ' }}" type="text" placeholder="Name" value="{{ old('name') }}" name="name" required>
          </div>
          @if($errors->has('name'))
            <div class="invalid-feedback" style="display:block">
                {{ $errors->first('name') }}
            </div>
          @endif

          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control {{ $errors->has('email') ? 'is-invalid': ' ' }}" type="email" placeholder="Email" value="{{ old('email') }}" name="email" required>
          </div>
          @if($errors->has('email'))
            <div class="invalid-feedback" style="display:block">
                {{ $errors->first('email') }}
            </div>
          @endif
          
          <div class="form-group">
            <label class="control-label">Month Income</label>
            <input class="form-control {{ $errors->has('monthSalary') ? 'is-invalid': ' ' }}" type="text" placeholder="Month Salary" value="{{ old('monthSalary') }}" name="monthSalary" required>
          </div>
          @if($errors->has('monthSalary'))
            <div class="invalid-feedback" style="display:block">
                {{ $errors->first('monthSalary') }}
            </div>
          @endif

          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control {{ $errors->has('password') ? 'is-invalid': ' ' }}" type="password" name="password" placeholder="Password" required>
          </div>
          @if($errors->has('password'))
            <div class="invalid-feedback" style="display:block">
                {{ $errors->first('password') }}
            </div>
          @endif

          <div class="form-group">
            <label class="control-label">PASSWORD CONFIRMATION</label>
            <input class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid': ' ' }}" type="password" name="password_confirmation" placeholder="Password Confirmation" required>
          </div>
          @if($errors->has('password_confirmation'))
            <div class="invalid-feedback" style="display:block">
                {{ $errors->first('password_confirmation') }}
            </div>
          @endif

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>