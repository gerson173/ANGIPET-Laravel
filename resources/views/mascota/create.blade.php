@extends('layouts.main', ['activePage' => 'mascota', 'titlePage' => 'Agregar Mascota'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('mascota.store') }}" method="post" class="form-horizontal">
                    @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-tittle">Mascota</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success')}}
                                </div>
                            @endif
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombres</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" autofocus>   
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="tipo" class="col-sm-2 col-form-label">Tipo de Mascota</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tipo">   
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="raza" class="col-sm-2 col-form-label">Raza</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="raza">   
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="color" class="col-sm-2 col-form-label">Color</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="color">   
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="age" class="col-sm-2 col-form-label">Edad</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="age">   
                                    </div>
                                </div>
                            </div>
                            <!-- Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection