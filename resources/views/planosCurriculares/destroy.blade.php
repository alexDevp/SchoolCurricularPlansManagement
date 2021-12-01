@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Deseja Eliminar este Plano Curricular?</h2></div>
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
        <div class="endPage">
            <a href="/planosCurriculares/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <a href="/planosCurriculares/deleteReg/{{$planoCurricular[0]->id}}"><button type="button" class="btn btn-success">Confirmar</button></a>
        </div>

    </div>
@endsection
