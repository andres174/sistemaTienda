@extends('layouts.plantilla.app')

@section('header_izq')
    BIENVENIDO A SISTEMA TIENDA
@endsection

@section('header_der')
    
@endsection

@section('contenido')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="\adminlte\img\carousel.png" class="d-block w-100" alt="Presentación">
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection