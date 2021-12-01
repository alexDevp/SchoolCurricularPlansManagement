@extends('master')
@section("content")
<div class="container align">

    <div class="titleCustom"><h2>Criar Escola</h2></div>

    <form method="POST" action="/escolas/store">
        @csrf
        <div class="form-group">
            <label class="titleCustom" for="escola">Nome:</label><br>
            <input type="text" class="form-control" id="escola" name="escola" placeholder="Ex:. Escola Superior de Design" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="morada">Morada:</label><br>
            <input type="text" class="form-control" id="morada" name="morada" placeholder="Ex:. Rua da Praça" value=""><p>
        </div>
        <div class="endPage">
            <a href="/escolas/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <input type="submit" class="btn btn-success" value="Criar">
        </div>
    </form>
</div>
@endsection
