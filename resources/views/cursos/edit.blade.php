@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Editar Curso</h2></div>
        <form method="POST" action="/cursos/update/{{$curso['id']}}">
            @csrf
            <div class="form-group">
                <label class="titleCustom" for="curso">Nome:</label><br>
                <input type="text" class="form-control" id="curso" name="curso" value="{{$curso['curso']}}"><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="nivel">Nível:</label><br>
                <input type="text" class="form-control" id="nivel" name="nivel" value="{{$curso['nivel']}}"><p>
            </div>
            <div class="endPage">
                <a href="/cursos/"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <input type="submit" class="btn btn-success" value="Concluir">
            </div>
        </form>
    </div>
@endsection
