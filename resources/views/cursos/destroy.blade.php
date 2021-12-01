@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Deseja Eliminar este Curso?</h2></div>

        <label class="titleCustom">Nome:</label><br>
        <p class="fieldCustom">{{$curso['curso']}}</p>
        <label class="titleCustom">Nível:</label><br>
        <p class="fieldCustom">{{$curso['nivel']}}</p>
        <div class="endPage">
            <a href="/cursos/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <a href="/cursos/deleteReg/{{$curso['id']}}"><button type="button" class="btn btn-success">Confirmar</button></a>
        </div>

    </div>
@endsection
