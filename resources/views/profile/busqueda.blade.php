
@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                
            </ol>
        </nav>

        <div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-7">
                <h4>Productos Lista</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            @if(count($productos) > 0)
                @foreach($productos as $pro)
                <div class="col-lg-3">
                    <div class="card" style="margin-bottom: 20px; height: auto; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                        <!-- <img src="/images/{{ $pro->image_path }}" --> 
                        <!-- Mostrar imagen del producto con el id: {{ $pro->id }} -->
                        <img src="{{ asset('imagenes/imgProduct/' . $pro->id . '.jpg') }}"
                        class="card-img-top mx-auto"
                        style="height: 300px; width: 300px;display: block;"
                        alt="{{ $pro->nombre }}">
                        <div class="card-body">
                        <a href=""><h6 class="card-title" style="font-size: 18px; font-weight: bold; color: #212529; text-decoration: none;">{{ $pro->nombre }}</h6></a>
                        <p style="font-size: 16px; color: #212529; font-weight: bold;">${{ $pro->precio }}</p>
                        <form action="" method="POST">
                            {{ csrf_field() }}
                                    <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                    <input type="hidden" value="{{ $pro->precio }}" id="price" name="price">
                                    <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                    <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                    <div class="card-footer" style="background-color: white;">
                                        <div class="row">
                                            <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                <i class="fa fa-shopping-cart"></i> agregar al carrito
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div ></div>class="col-lg-12">
                    <p>No hay productos disponibles.</p>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {{ $productos->links() }}
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
@endsection
