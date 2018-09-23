@extends('layouts.app')

@section('body-class', 'landing-page sidebar-collapse')

@section('title', 'Welcome to Etkon Shop')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/fondo_rascacielos.jpeg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Bienvenidos a Etkon shop</h1>
          <h4> Realiza pedidos en linea y contactaremos con usted para todo lo que quiera</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Como funciona
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Porque deben confiar en nuestros productos</h2>
            <h5 class="description">Puedes visualizar nuestra relacion de productos y comprobaras que somo los campeones</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Atendemos tus dudas</h4>
                <p>Atendemos rapidamente cualquier consulta que tengas via chat. No estas solo, estamos detras atentos a tus inquietudes</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Pago seguro</h4>
                <p>Todos los pagos que realice seran a traves de la plataforma de Pay Pal, asegurando un metodo agil y seguro</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Informacion privada</h4>
                <p>Mediante el panel de usuario, solo tu tendras acceso a la informacion personal y de todos los pedidos realizados</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Nuestros Productos</h2>
        <div class="team">
          <div class="row">
            @foreach($products as $item)
              <div class="col-md-4">
                <div class="team-player">
                  <div class="card card-plain">
                    <div class="col-md-6 ml-auto mr-auto">
                      <img src="{{ $item->images()->first()->image }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <h4 class="card-title">{{ $item->name }}
                      <br>
                      <small class="card-description text-muted">{{ $item->category->name }}</small>
                    </h4>
                    <div class="card-body">
                      <p class="card-description">{{ $item->description }}
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                      <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          
          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">?Aun no te has registrado?</h2>
            <h4 class="text-center description">Registrate ingresando los siguientes datos y podras realizar tus pedidos a traves de nuestro carrito de compras. Si aun no te decides, de igual forma, con tu cuenta de usuario podras realizar cualquier consulta sin compromiso</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                <textarea class="form-control" rows="4" id="exampleMessage" name="coments"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Send 
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
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
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
@endsection