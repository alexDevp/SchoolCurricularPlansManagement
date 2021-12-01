@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Editar o Plano Curricular</h2></div>
        <form method="POST" action="/planosCurriculares/update/{{$planoCurricular[0]->id}}">
            @csrf

            <div class="form-group">
                <label class="titleCustom" for="curso">Curso:</label><br>
                <select class="custom-select my-1 mr-sm-2" id="curso" name="curso">
                    <option value={{$planoCurricular[0]->id_curso}} selected>{{$planoCurricular[0]->curso}}</option>
                    @foreach($cursos as $curso)
                        <option value={{$curso->id}}>{{$curso->curso}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="titleCustom" for="escola">Escola:</label><br>
                <select class="custom-select my-1 mr-sm-2" id="escola" name="escola">
                    <option value={{$planoCurricular[0]->id_escola}} selected>{{$planoCurricular[0]->escola}}</option>
                    @foreach($escolas as $escola)
                        <option value={{$escola->id}}>{{$escola->escola}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="titleCustom" for="regime">Regime:</label><br>
                <select class="custom-select my-1 mr-sm-2" id="regime" name="regime" >
                    <option value={{$planoCurricular[0]->id_regime}} selected>{{$planoCurricular[0]->regime}}</option>
                    @foreach($regimes as $regime)


                        <option value={{$regime->id}}>{{$regime->regime}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="titleCustom" for="ucs">Unidades Curriculares:</label><br>
                <select class="my-1 mr-sm-2 selectpicker hundred" id="multipleSelect" name="ucs[]" multiple="multiple" data-live-search="true">
                    @foreach($ucs as $uc)
                        {{$val = 0}}
                        @foreach($listaUcs as $ucL)
                            @if($ucL->id == $uc->id)
                                <option value={{$uc->id}} selected>{{$uc->codigo}} - {{$uc->nome}} | {{$uc->ano}}ºAno | {{$uc->semestre}}ºSemestre</option>
                                {{$val = 1}}
                            @endif
                        @endforeach
                        @if($val ==0)
                            <option value={{$uc->id}}>{{$uc->codigo}} - {{$uc->nome}} | {{$uc->ano}}ºAno | {{$uc->semestre}}ºSemestre</option>
                        @endif

                    @endforeach
                </select>
            </div>
            <div class="endPage">
                <a href="/planosCurriculares/"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <input type="submit" class="btn btn-success" value="Concluir">
            </div>
        </form>
    </div>


@endsection
