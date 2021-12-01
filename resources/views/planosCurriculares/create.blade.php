@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Criar Plano Curricular</h2></div>

        <form method="POST" action="/planosCurriculares/store">
            @csrf

            <div class="form-group">
                <label class="titleCustom" for="curso">Curso:</label><br>
                <select class="custom-select my-1 mr-sm-2" id="curso" name="curso">
                    <option selected>Escolher...</option>
                    @foreach($cursos as $curso)
                    <option value={{$curso->id}}>{{$curso->curso}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="titleCustom" for="escola">Escola:</label><br>
                <select class="custom-select my-1 mr-sm-2" id="escola" name="escola">
                    <option selected>Escolher...</option>
                    @foreach($escolas as $escola)
                    <option value={{$escola->id}}>{{$escola->escola}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="titleCustom" for="regime">Regime:</label><br>
                <select class="custom-select my-1 mr-sm-2" id="regime" name="regime" >
                    <option selected>Escolher...</option>
                    @foreach($regimes as $regime)
                    <option value={{$regime->id}}>{{$regime->regime}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="titleCustom" for="ucs">Unidades Curriculares:</label><br>
                <select class="my-1 mr-sm-2 selectpicker hundred" id="multipleSelect" name="ucs[]" multiple="multiple" data-live-search="true">
                    @foreach($ucs as $uc)
                        <option value={{$uc->id}}>{{$uc->codigo}} - {{$uc->nome}} | {{$uc->ano}}ºAno | {{$uc->semestre}}ºSemestre</option>
                    @endforeach
                </select>
            </div>
            <div class="endPage">
                <a href="/planosCurriculares/"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <input type="submit" class="btn btn-success" value="Criar">
            </div>

        </form>
    </div>


@endsection
