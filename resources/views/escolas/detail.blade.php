@extends('master')
@section("content")
    <div class="container align">
        <a href="/escolas/"><button type="button" class="btn btn-danger">Voltar</button></a>
        <div class="titleCustom"><h2>Escola:</h2></div>

        <label class="titleCustom">Nome:</label><br>
        <p class="fieldCustom">{{$escola['escola']}}</p>
        <label class="titleCustom">Morada:</label><br>
        <p class="fieldCustom">{{$escola['morada']}}</p>
    </div>
@endsection
