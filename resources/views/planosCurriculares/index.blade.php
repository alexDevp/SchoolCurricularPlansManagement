@extends('master')
@section("content")
    <div class="container">
        <div class="titleCustom"><h2>Planos Curriculares</h2></div>
        <div class="row">

            <div class="col-12">
                @if($userType=Session::get('user')['admin'] == 1)
                <a href="/planosCurriculares/create/"><button type="button" class="btn btn-success novoBtn">Criar Novo Plano Curricular</button></a>
                @endif|⁂ Arrastar rato por cima|
                <table class="table" border="1">

                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Escola</th>
                        <th scope="col">Regime</th>
                        <th scope="col">Ucs</th>
                        @if($userType=Session::get('user')['admin'] == 1)
                        <th></th>
                        @endif
                    </tr>
                    </thead>

                    <tr>

                    @foreach($planosCurriculares as $value)
                        <tr>
                            <td><a href="/planosCurriculares/detail/{{$value->id}}"><button type="button" class="btn btn-ver btn-sm hundred">Ver</button></a></td>

                            <td>{{$value->id}}</td>
                            <td>{{$value->curso}}</td>
                            <td>{{$value->escola}}</td>
                            <td>{{$value->regime}}</td>
                            <td><i class="tt" data-toggle="tooltip" data-placement="top" data-html="true" title="@foreach($listasUcs[$value->id] as $uc){{$uc->codigo}} - {{$uc->uc}} | {{$uc->ano}}ºAno | {{$uc->semestre}}ºSemestre
@endforeach">⁂</i></td>
                            @if($userType=Session::get('user')['admin'] == 1)
                            <td>
                                <a href="/planosCurriculares/edit/{{$value->id}}"><button type="button" class="btn btn-success btn-sm">Editar</button></a>
                                <a href="/planosCurriculares/destroy/{{$value->id}}"><button type="button" class="btn btn-danger btn-sm">Apagar</button></a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>

@endsection
