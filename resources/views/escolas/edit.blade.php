@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Editar Escola</h2></div>
        <form method="POST" action="/escolas/update/{{$escola['id']}}">
            @csrf
            <div class="form-group">
                <label class="titleCustom" for="escola">Nome:</label><br>
                <input type="text" class="form-control" id="escola" name="escola" value="{{$escola['escola']}}"><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="morada">Morada:</label><br>
                <input type="text" class="form-control" id="morada" name="morada" value="{{$escola['morada']}}"><p>
            </div>
            <div class="endPage">
                <a href="/escolas/"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <input type="submit" class="btn btn-success" value="Concluir">
            </div>
        </form>
    </div>
@endsection
