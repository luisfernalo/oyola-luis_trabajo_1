@extends('master')
@section('contenido')
         <form action="{{ url('formulario1') }}" method="POST">
             {{ csrf_field() }}
             <h1>Que deseas buscar</h1>
            <input type="text" name="buscar1">
               
            <br><button type="submit">Enviar</button>
        </form>
@stop

