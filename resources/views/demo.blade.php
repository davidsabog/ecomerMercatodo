@extends('layouts.main_layout')



@section('title','Mercatodo')


@section('content')


  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="max-width: 1200px; gap: 10px; margin: 0px auto; padding:10px 0px;">
            <img src="img/carrusel/tecno2.jpg" class="d-block w-100" alt="..." style="height: auto; width: 100%; border-radius: 0pxs; ">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item" style="max-width: 1200px; gap: 10px; margin: 0px auto; padding:10px 0px;">
            <img src="img/carrusel/home3.jpg" class="d-block w-100" alt="..." style="height: auto; width: 100%; border-radius: 0pxs; ">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item" style="max-width: 1200px; gap: 10px; margin: 0px auto; padding:10px 0px;">
            <img src="img/carrusel/promo1.jpg" class="d-block w-100" alt="..." style="height: auto; width: 100%; border-radius: 0pxs;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

  </div>


  <main class="content">
    <div class="items">
        <div class="card-columns">
            @forelse($products as $product)
                <div class="item">
                    @if($product->status=='disponible')
                        <div class="card">
                            <img class="card-img-top" src="{{ asset("images/products/{$product->image}") }}" alt="Product image" width="300px" height="200px" class="item-image">
                            <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('products/'.$product->slug) }}">{{ $product->name }}</a></h5>
                            <h5 class="card-title">Precio: ${{ $product->price}}</a></h5>
                            <h5 class="card-title">Estado: {{ $product->status}}</a></h5>
                            {{-- <p class="card-text"> <a href="{{url('products/category/'.$product->category->slug)}}">{{ $product->category->name }}</a></p> --}}
                            <a href="#" class="btn btn-primary">Quiero Comprar</a>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Ultima modificacion: {{$product->updated_at}}</small>
                            </div>
                        </div>
                    @endif
                </div>
            @empty
            <p>No se encontraron productos
            @endforelse
        </div>
    </div>
</main>

@endsection


