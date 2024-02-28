@extends('layouts.app')


@section('header')


<main class="sectionsinbordes">

    <div class="contenedorcatalogo">
        @foreach ($Productoss as $producto)
            <div class="referenciaslentecatalogo">
                <img src="{{ asset('storage/img/' . $producto->url) }}" alt="">
                <div class="contenidomain">
                    <h4>{{ $producto->nombre }}</h4>
                    <ul>
                        <a href="#" class="material-symbols-outlined">shopping_cart</a>
                        <a href="#" class="material-symbols-outlined">favorite</a>
                    </ul>
                    <a href="#" class="boton">{{ $producto->precio }}</a>
                </div>
            </div>
        @endforeach
    </div>

    @endsection()


    @section('footer')
    @endsection

</main>

@section('logout')
@endsection()
