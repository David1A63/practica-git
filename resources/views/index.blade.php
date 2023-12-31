<!--Aquí se esta cargando la plantilla principal-->
@extends('plantillas.app')


@section('head')
<!--Esta etiqueta sirve para colocar contenido en la etiqueta head-->
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/carrusel.js'])
<title>Inicio</title>

@stop

@section('contenidoPrincipal')
<!--En esta sección se carga el contenido principal de la página entre la navbar y el footer-->
<h3 class="text-dark fw-bold" style="margin-left: 1%; text-align: center;">Bienvenido a Pan Rico Pan</h3>
<div style="margin-top: 1%; display: flex; justify-content: center;">
    <img src="{{ asset('img/1.avif') }}" alt="" style="width: 500px; height: 300px; border-radius: 10px;">
</div>

@stop

@section('contenidoJs')
<!--En caso de necesitar cargar archivos Js externos (como de plugins)-->
<!--Se deben de cargar aquí-->

@stop
