@extends('master')
@section("content")
    <div class="container align">
        <a href="/cursos/"><button type="button" class="btn btn-danger">Voltar</button></a>
        <div class="titleCustom"><h2>Curso:</h2></div>

        <label class="titleCustom">Nome:</label><br>
        <p class="fieldCustom">{{$curso['curso']}}</p>
        <label class="titleCustom">Nível:</label><br>
        <p class="fieldCustom">{{$curso['nivel']}}</p>
    </div>
@endsection
