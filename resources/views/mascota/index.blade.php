@extends('layouts.main', ['activePage' => 'mascota', 'titlePage' => 'Mascotas'])
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <div class="card-category">Mascotas Registradas</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Nombres</th>
                                                <th>Tipo de Mascota</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($mascotas as $mascota)
                                                <tr>
                                                    <td>{{ $mascota-> name}}</td>
                                                    <td>{{ $mascota-> tipo }}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('mascota.show', $mascota->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                        <button class="btn btn-warning" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button class="btn btn-danger" type="button">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection