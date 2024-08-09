@extends('adminlte::page')

@section('title', 'Listagem de Cursos')

@section('content_header')
    <h1>Listagem de Cursos</h1>
@stop

@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>

        @forelse($objetos as $objeto)
        <tr>
            <td> {{ $objeto['id'] }} </td>
            <td> {{ $objeto['nome'] }} </td>
        </tr>
        @empty
        <tr>
            <td> Sem Dados no Banco de Dados </td>
        </tr>
        @endforelse
    </table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop