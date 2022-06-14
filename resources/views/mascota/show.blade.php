@extends('layouts.main', ['activePage' => 'mascota', 'titlePage' => 'Información'])
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Mascotas</div>
                            <p class="card-category">Detalles de la Mascota {{ $mascota->name }}</p>
                        </div>
                    <!--Body-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-user">
                                        <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <a href="#">
                                                    <img src="{{ asset('/img/can.png') }}" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{ $mascota->name }}</h5>
                                                </a>
                                                <p class="description">
                                                Mascota: {{ $mascota->tipo }}<br>
                                                Raza: {{ $mascota->raza }}<br>
                                                Color: {{ $mascota->color }}<br>
                                                Edad: {{ $mascota->age }}
                                                </p>
                                            </div>
                                        </p>
                                        
                                        <div class="card-description">
                                        Estas como lokitaaaaaaaaa
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('mascota.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                            <button class="btn btn-sm btn-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- End card user-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection