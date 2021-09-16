@extends('layouts.layout')

@section('title', 'Registro de Usuario')

<figure class="text-center">
    <blockquote class="blockquote">
        <h1>Registro de Usuario</h1>
    </blockquote>
    <figcaption class="blockquote-footer">
        <cite title="Source Title">Ingrese los campos</cite>
    </figcaption>
</figure>

{{-- Campo de ingreso de datos --}}
@section('table2')
<form action="/usuarios" method="POST">
    {{-- "cross site request forgery" para que la base de datos no lo vea como sospechoso y se puedan subir los elementos --}}
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>

    {{-- Menú Tipo de documento --}}
    <div class="mb-3">
        <label for="" class="form-label">Tipo de identificación</label>
        <br>
        <select name="tipoDocumento" id="tipoDocumento">
            <option value="Cedula">Cédula</option>
            <option value="T. Identidad">Tarjeta de Identidad</option>
            <option value="Pasaporte">Pasaporte</option>
            <option value="Registro Civil">Registro Civil</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Número de identificación</label>
        <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento">
    </div>

    {{-- Formulario Fecha --}}
    <div class="mb-3">
        <label for="start">Fecha de nacimiento</label>
        <br>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento"
        value="2000-01-01"
        min="1900-01-01" max="2021-12-31">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Peso</label>
        <input type="text" class="form-control" id="peso" name="peso">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Talla</label>
        <input type="text" class="form-control" id="talla" name="talla">
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