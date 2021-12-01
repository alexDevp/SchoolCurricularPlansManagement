@extends('master')
@section("content")
    <div class="container align">
        <a href="/planosCurriculares/"><button type="button" class="btn btn-danger">Voltar</button></a>
        <div class="titleCustom"><h2>Plano Curricular:</h2></div>
        <label class="titleCustom">Curso:</label><br>
        <p class="fieldCustom">{{$planoCurricular[0]->curso}}</p>
        <label class="titleCustom">Escola:</label><br>
        <p class="fieldCustom">{{$planoCurricular[0]->escola}}</p>
        <label class="titleCustom">Regime:</label><br>
        <p class="fieldCustom">{{$planoCurricular[0]->regime}}</p>
        <label class="titleCustom">Unidades Curriculares:</label><br>
        @foreach($listaUcs as $uc)
            <p class="fieldCustom">{{$uc->codigo}} - {{$uc->uc}} | {{$uc->ano}}ºAno | {{$uc->semestre}}ºSemestre</p>
        @endforeach




    </div>
@endsection
