@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Editar Regime</h2></div>
        <form method="POST" action="/regimes/update/{{$regime['id']}}">
            @csrf
            <div class="form-group">
                <label class="titleCustom" for="regime">Nome:</label><br>
                <input type="text" class="form-control" id="regime" name="regime" value="{{$regime['regime']}}"><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="sigla">Sigla:</label><br>
                <input type="text" class="form-control" id="sigla" name="sigla" value="{{$regime['sigla']}}"><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="descricao">Descrição:</label><br>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{$regime['descricao']}}"><p>
            </div>
            <div class="endPage">
                <a href="/regimes/"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <input type="submit" class="btn btn-success" value="Concluir">
            </div>
        </form>
    </div>
@endsection
