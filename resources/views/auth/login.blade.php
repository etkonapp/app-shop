@extends('layouts.app')

@section('body-class', 'login-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
                <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>
              <p class="description text-center">Or Be Classical</p>

              <div class="card-body">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}" required autofocus>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input id="password" type="password" class="form-control" placeholder="Password..." name="password" required>
                </div>

                <div class="form-check">
                        <label class="form-check-label">
                            
                            <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                </div>
                {{--  <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                </a>  --}}

              </div>

              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-wd btn-lg">Get Started</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="#">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="#">
                About Us
              </a>
            </li>
            <li>
              <a href="#">
                Blog
              </a>
            </li>
            <li>
              <a href="#">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="#" target="_blank">Etkon app</a> for a better web.
        </div>
      </div>
    </footer>
  </div>
@endsection