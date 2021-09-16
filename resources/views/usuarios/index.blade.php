@extends('layouts.layout')

{{-- Se exporta css de la página datatables.net para hacer una tabla más fácil --}}
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('title', 'Lista de Usuarios')

<figure class="text-center">
    <blockquote class="blockquote">
        <h1>Lista de Usuarios</h1>
    </blockquote>
</figure>

<div class="d-grid gap-2 col-6 mx-auto">
    <a class="btn btn-secondary" role="button" href="/">Regresar al Menú</a>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a class="btn btn-primary" role="button" href="/usuarios/create">Registrar Usuario</a>
</div>

@section('table1')
@csrf
    <table class="table table-striped table-hover" id="usuarios">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">TIPO DOCUMENTO</th>
                <th scope="col">N° DOCUMENTO</th>
                <th scope="col">FECHA NACIMIENTO</th>
                <th scope="col">PESO</th>
                <th scope="col">TALLA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <th>{{ $usuario->id }}</th>
                <th>{{ $usuario->nombre }}</th>
                <th>{{ $usuario->tipoDocumento }}</th>
                <th>{{ $usuario->numeroDocumento }}</th>
                <th>{{ $usuario->fechaNacimiento }}</th>
                <th>{{ $usuario->peso }}</th>
                <th>{{ $usuario->talla }}</th>
                <th>
                    <form action="{{route('usuarios.destroy' , $usuario->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button> 
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

{{-- Se agrega el codigo de javascript para un mejor y más fácil manejo de la tabla, también extraido de datatables.net --}}
@section('js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
$('#usuarios').DataTable({
    "lengthMenu" : [[5,10,50,-1] , [5,10,50,"All"]],
    "language": {
    processing:     "Procesando...",
    search:         "Buscar:",
    lengthMenu:    "Mostrar _MENU_ usuarios",
    info:           "Mostrando _START_ a _END_ de _TOTAL_ usuarios",
    infoEmpty:      "Mostrando registros del 0 a 0 de un total de 0 registros",
    infoFiltered:   "(filtrado de un total de _MAX_ registros)",
    infoPostFix:    "",
    loadingRecords: "Cargando...",
    zeroRecords:    "No se muestran resultados",
    emptyTable:     "No hay datos disponibles en la tabla.",
    paginate: {
        first:      "Primera",
        previous:   "Anterior",
        next:       "Siguiente",
        last:       "Última"
    },
    aria: {
        sortAscending:  ": Activar para ordenar la columna de manera ascendente",
        sortDescending: ": Activar para ordenar la columna de manera descendente"
    }
}
});
} );
    </script>
@endsection