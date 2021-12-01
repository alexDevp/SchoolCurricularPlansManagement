@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Deseja Eliminar esta Escola?</h2></div>

        <label class="titleCustom">Nome:</label><br>
        <p class="fieldCustom">{{$escola['escola']}}</p>
        <label class="titleCustom">Morada:</label><br>
        <p class="fieldCustom">{{$escola['morada']}}</p>
        <div class="endPage">
            <a href="/escolas/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <a href="/escolas/deleteReg/{{$escola['id']}}"><button type="button" class="btn btn-success">Confirmar</button></a>
        </div>
    </div>
@endsection
