@extends('master')
@section("content")
<div class="container align">
    <div class="titleCustom"><h2>Criar Unidade Curricular</h2></div>
    <form method="POST" action="/ucs/store">
        @csrf
        <div class="form-group">
            <label class="titleCustom" for="codigo">Código:</label><br>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ex:. 123124" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="nome">Nome:</label><br>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex:. Astrologia" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="creditos">Créditos:</label><br>
            <input type="text" class="form-control" id="creditos" name="creditos" placeholder="Ex:. 6" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="duracao">Duração:</label><br>
            <input type="text" class="form-control" id="duracao" name="duracao" placeholder="Ex:. 120" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="teorica">Teórica:</label><br>
            <input type="text" class="form-control" id="teorica" name="teorica" placeholder="Ex:. 60" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="pratica">Prática:</label><br>
            <input type="text" class="form-control" id="pratica" name="pratica" placeholder="Ex:. 30" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="ano">Ano:</label><br>
            <input type="text" class="form-control" id="ano" name="ano" placeholder="Ex:. 1" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="semestre">Semestre:</label><br>
            <input type="text" class="form-control" id="semestre" name="semestre" placeholder="Ex:. 2" value=""><p>
        </div>

        <div class="endPage">
            <a href="/ucs/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <input type="submit" class="btn btn-success" value="Criar">
        </div>

    </form>
</div>
@endsection
