<!--Este es un ejemplo de como usar las plantillas de blade-->
<!--Aquí se esta cargando la plantilla principal-->
@extends('plantillas.app')


@section('head')
<!--Esta etiqueta sirve para colocar contenido en la etiqueta head-->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<title>Inicio</title>

@stop

@section('contenidoPrincipal')
<!--En esta sección se carga el contenido principal de la página entre la navbar y el footer-->
<h3 class="text-light fw-bold" style="margin-left: 1%; text-align: center;">Bienvenido a la Tienda Fit Sport</h3>

@stop

@section('contenidoJs')
<!--En caso de necesitar cargar archivos Js externos (como de plugins)-->
<!--Se deben de cargar aquí-->

@stop
