
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">



  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <img src="{{ url('AdminLTE-3.2.0/dist/img/logo1.png') }}" alt="">
      {{-- <a href="AdminLTE-3.2.0/index2.html" class="h1"><b>Admin</b>LTE</a> --}}
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login terlebih dahulu</p>



      <form action="{{ ('/postlogin') }}" method="post">
        @csrf
        
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="input-group mb-3">
          <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" value="{{ old('password') }}" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror


              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              {{-- <label for="remember">
                Remember Me
              </label> --}}
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      {{-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> --}}
      <p class="mb-4">
        <a href="{{ route('register') }}" class="text-center"> Register Akun Baru</a>
    </p>

    </div>


    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
