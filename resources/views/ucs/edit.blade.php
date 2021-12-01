@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Editar Unidade Curricular</h2></div>
        <form method="POST" action="/ucs/update/{{$uc['id']}}">
            @csrf
            <div class="form-group">
                <label class="titleCustom" for="codigo">Código:</label><br>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{$uc['codigo']}}"><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="nome">Nome:</label><br>
                <input type="text" class="form-control" id="nome" name="nome" value={{$uc['nome']}}><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="creditos">Créditos:</label><br>
                <input type="text" class="form-control" id="creditos" name="creditos" value={{$uc['creditos']}}><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="duracao">Duração:</label><br>
                <input type="text" class="form-control" id="duracao" name="duracao" value={{$uc['duracao']}}><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="teorica">Teórica:</label><br>
                <input type="text" class="form-control" id="teorica" name="teorica" value={{$uc['teorica']}}><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="pratica">Prática:</label><br>
                <input type="text" class="form-control" id="pratica" name="pratica" value={{$uc['pratica']}}><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="ano">Ano:</label><br>
                <input type="text" class="form-control" id="ano" name="ano" value={{$uc['ano']}}><p>
            </div>
            <div class="form-group">
                <label class="titleCustom" for="semestre">Semestre:</label><br>
                <input type="text" class="form-control" id="semestre" name="semestre" value={{$uc['semestre']}}><p>
            </div>
            <div class="endPage">
                <a href="/ucs/"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <input type="submit" class="btn btn-success" value="Concluir">
            </div>

        </form>
    </div>
@endsection
