@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar Usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('users.update', $user->id) }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-tittle">Usuario</h4>
                                <p class="card-category">Editar datos</p>
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
                                        <input type="text" class="form-control" name="name" placeholder="{{ $user->name }}" autofocus>   
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="lastname" class="col-sm-2 col-form-label">Apellidos</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="{{ $user->lastname }}" name="lastname">   
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="age" class="col-sm-2 col-form-label">Edad</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="{{ $user->age }}" name="age">   
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="{{ $user->email }}" name="email">   
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Nueva Contraseña</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="Ingrese la contraseña solo en caso de modificarla" name="password">   
                                    </div>
                                </div>
                            </div>
                            <!-- Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection