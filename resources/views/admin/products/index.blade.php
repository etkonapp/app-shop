@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('body-class', 'profile-page sidebar-collapse')


@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/bg2.jpg') }}')">
</div>
  <div class="main main-raised">
    <div class="container-fluid">
   
      <div class="section text-center">
        <h2 class="title">Listado de Productos</h2>
        <div class="team">
          <div class="row">
            
              <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round ml-5 mb-5" >Add new product</a>
            
              <table class="table">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th class="text-right">Price</th>
                      <th class="text-right">Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $item)
                    <tr>
                      <td class="text-center">{{ $item->id }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->description }}</td>
                      <td>{{ $item->category->name }}</td>
                      <td class="text-right">{{ $item->price }}</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title = "Info product" class="btn btn-info btn-fab btn-fab-mini btn-round"><i class="material-icons">info</i></button>
                        <button type="button" rel="tooltip" title = "Edit product"class="btn btn-success btn-fab btn-fab-mini btn-round"><i class="material-icons">edit</i></button>
                        <button type="button" rel="tooltip" title = "Delete product"class="btn btn-danger btn-fab btn-fab-mini btn-round"><i class="material-icons">close</i></button>
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
              </table>
            <div class="text-center">
                {{ $products->links() }}
            </div>
              
                              
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