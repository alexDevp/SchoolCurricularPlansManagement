@extends('master')
@section("content")
<div class="container align">
    <div class="titleCustom"><h2>Criar Regime</h2></div>
    <form method="POST" action="/regimes/store">
        @csrf
        <div class="form-group">
            <label class="titleCustom" for="regime">Nome:</label><br>
            <input type="text" class="form-control" id="regime" name="regime" placeholder="Ex:. Diurno" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="sigla">Sigla:</label><br>
            <input type="text" class="form-control" id="sigla" name="sigla" placeholder="Ex:. DIU" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="descricao">Descrição:</label><br>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Ex:. Ensino durante o dia." value=""><p>
        </div>
        <div class="endPage">
            <a href="/regimes/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <input type="submit" class="btn btn-success" value="Criar">
        </div>
    </form>
</div>
@endsection
