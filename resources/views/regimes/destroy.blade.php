@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Deseja Eliminar este Regime?</h2></div>

        <label class="titleCustom">Regime:</label><br>
        <p class="fieldCustom">{{$regime['regime']}}</p>
        <label class="titleCustom">Sigla:</label><br>
        <p class="fieldCustom">{{$regime['sigla']}}</p>
        <label class="titleCustom">Descrição:</label><br>
        <p class="fieldCustom">{{$regime['descricao']}}</p>
        <div class="endPage">
            <a href="/regimes/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <a href="/regimes/deleteReg/{{$regime['id']}}"><button type="button" class="btn btn-success">Confirmar</button></a>
        </div>
    </div>
@endsection
