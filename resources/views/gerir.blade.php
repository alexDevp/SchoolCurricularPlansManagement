@extends('master')
@section("content")
    <div class = "container">
        <div class="row menu">
            <div class="col-sm">
                <a href="/ucs"><button class="btn btn-success menuItem">Unidades Curriculares</button></a>
            </div>
            <div class="col-sm">
                <a href="/escolas"><button class="btn btn-success menuItem">Escolas</button></a>
            </div>
            <div class="col-sm">
                <a href="/cursos"><button class="btn btn-success menuItem">Cursos</button></a>
            </div>
            <div class="col-sm">
                <a href="/regimes"><button class="btn btn-success menuItem">Regimes</button></a>
            </div>
        </div>
    </div>
@endsection
