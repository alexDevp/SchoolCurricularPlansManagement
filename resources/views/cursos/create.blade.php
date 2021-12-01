@extends('master')
@section("content")
<div class="container align">

    <div class="titleCustom"><h2>Criar Curso</h2></div>

    <form method="POST" action="/cursos/store">
        @csrf
        <div class="form-group">
            <label class="titleCustom" for="curso">Nome:</label><br>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="Ex:. Economia" value=""><p>
        </div>
        <div class="form-group">
            <label class="titleCustom" for="nivel">Nível:</label><br>
            <input type="text" class="form-control" id="nivel" name="nivel" placeholder="Ex:. Nível 4" value=""><p>
        </div>
        <div class="endPage">
            <a href="/cursos/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <input type="submit" class="btn btn-success" value="Criar">
        </div>
    </form>

</div>
@endsection
