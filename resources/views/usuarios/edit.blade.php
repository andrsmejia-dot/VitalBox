@extends('layouts.layout')

@section('title', 'Edición del Usuario')

<figure class="text-center">
    <blockquote class="blockquote">
        <h1>Editar información del Usuario</h1>
    </blockquote>
    <figcaption class="blockquote-footer">
        <cite title="Source Title">Ingrese los campos</cite>
    </figcaption>
</figure>

{{-- Campo de ingreso de datos --}}
@section('table2')
<form action="/usuarios/{{$usuario->id}}" method="POST">
    {{-- "cross site request forgery" para que la base de datos no lo vea como sospechoso y se puedan subir los elementos --}}
    @csrf
    {{-- Con laravel es necsario usar terminología php para que se reconozca --}}
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$usuario->nombre}}">
    </div>

    {{-- Menú Tipo de documento --}}
    <div class="mb-3">
        <label for="" class="form-label">Tipo de identificación</label>
        <br>
        <select name="tipoDocumento" id="tipoDocumento" value="{{$usuario->tipoDocumento}}">
            <option value= "Cedula">Cédula</option>
            <option value="Identidad">Tarjeta Identidad</option>
            <option value="Pasaporte">Pasaporte</option>
            <option value="Civil">Registro Civil</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Número de identificación</label>
        <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento" value="{{$usuario->numeroDocumento}}">
    </div>

    {{-- Formulario Fecha --}}
    <div class="mb-3">
        <label for="start">Fecha de nacimiento</label>
        <br>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento"
        value="{{$usuario->fechaNacimiento}}"
        min="1900-01-01" max="2021-12-31" value="{{$usuario->fechaNacimiento}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Peso(Kg)</label>
        <input type="text" class="form-control" id="peso" name="peso" value="{{$usuario->peso}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Talla(metros) <i>Ejemplo: 1.72</i></label>
        <input type="text" class="form-control" id="talla" name="talla" value="{{$usuario->talla}}">
    </div>

    {{-- Botones --}}
    <div align="center">
    <a href="/usuarios" class="btn btn-outline-primary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

</form>
@endsection

@section('footer')
    <h6>Andrés Mejía Córdoba - 2021</h6>
@endsection