@extends('layouts.app')

@section('body-class', 'login-page sidebar-collapse')

@section('content')

<div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="card card-login">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif

                <form class="form"  method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}

                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Register</h4>
                         </div>
                        <p class="description text-center">Complete your personal information</p>

                    <div class="card-body">

                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons">face</i></span>
                            </div>
                            <input type="text" class="form-control  name=" name="name" value="{{ old('name') }}" required autofocus" placeholder="Name...">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons">mail</i></span>
                            </div>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons">lock_outline</i></span>
                            </div>
                            <input id="password" type="password" class="form-control" placeholder="Password..." name="password" required>
                        </div>
        
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons">lock_outline</i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Confirm Password..." name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="footer text-left ml-2">
                        <button type="submit" class="btn btn-success btn-wd"><i class="material-icons">check</i> Confirm register</button>
                    </div>

                </form>
             </div>
        </div>
    </div>
</div>

@endsection
