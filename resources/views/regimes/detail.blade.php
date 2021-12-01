@extends('master')
@section("content")
    <div class="container align">
        <a href="/regimes/"><button type="button" class="btn btn-danger">Voltar</button></a>
        <div class="titleCustom"><h2>Regime:</h2></div>

        <label class="titleCustom">Nome:</label><br>
        <p class="fieldCustom">{{$regime['regime']}}</p>
        <label class="titleCustom">Sigla:</label><br>
        <p class="fieldCustom">{{$regime['sigla']}}</p>
        <label class="titleCustom">Descrição:</label><br>
        <p class="fieldCustom">{{$regime['descricao']}}</p>
    </div>
@endsection
