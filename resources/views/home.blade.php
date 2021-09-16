<!-- Heredo del layout que está en la carpeta layouts -->
@extends('layouts.layout')

<!-- Cambio el titulo para esta página -->
@section('title' , 'Principal')

<!-- Encabezado-->
<figure class="text-center">
    <blockquote class="blockquote">
    <h1>Bienvenido al administración de pacientes</h1>
    </blockquote>
    <figcaption class="blockquote-footer">
        <cite title="Source Title">ELIJA UNA DE LAS SIGUIENTES OPCIONES:</cite>
    </figcaption>
</figure>

<!-- Agrego el cuerpo con botones e imagenes libres-->
@section('button1')

<div class="d-grid gap-2 col-6 mx-auto">
    <a class="btn btn-primary" role="button" href="/usuarios">Lista de Usuarios</a>
</div>
@endsection

@section('content')
    @section('image1')
        <img src="https://i.pinimg.com/originals/e6/34/e7/e634e7acddaf8484e8496619c07292d0.png" alt="Lista de Usuarios" width="480" height="300">
    @endsection
@endsection

@section('button2')

<div class="d-grid gap-2 col-6 mx-auto">
    <a class="btn btn-primary" role="button" href="/usuarios/create">Crear Usuario</a>
</div>
@endsection


@section('content2')
    @section('image2')
        <img src="https://cdn-icons-png.flaticon.com/512/455/455764.png" alt="Formulario de Edición" width="300" height="280">
    @endsection
@endsection


<!-- Agrego footer -->
@section('footer')
    <h6>Andrés Mejía Córdoba - 2021</h6>
@endsection