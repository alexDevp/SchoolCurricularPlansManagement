@extends('master')
@section("content")
    <div class="container">
        <div class="titleCustom"><h2>Unidades Curriculares</h2></div>
        <div class="row">

            <div class="col-12">
                @if($userType=Session::get('user')['admin'] == 1)
                <a href="/ucs/create/"><button type="button" class="btn btn-success novoBtn">Criar Nova UC</button></a>
                @endif
                <table class="table" border="1">

                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID</th>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Créditos</th>
                        <th scope="col">Duração</th>
                        <th scope="col">Teórica</th>
                        <th scope="col">Prática</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Semestre</th>
                        @if($userType=Session::get('user')['admin'] == 1)
                        <th></th>
                        @endif
                    </tr>
                    </thead>

                    <tr>
                    @foreach($ucs as $value)
                        <tr>
                            <td><a href="/ucs/detail/{{$value->id}}"><button type="button" class="btn btn-ver btn-sm hundred">Ver</button></a></td>
                            <td>{{$value->id}}</td>
                            <td>{{$value->codigo}}</td>
                            <td>{{$value->nome}}</td>
                            <td>{{$value->creditos}}</td>
                            <td>{{$value->duracao}}</td>
                            <td>{{$value->teorica}}</td>
                            <td>{{$value->pratica}}</td>
                            <td>{{$value->ano}}</td>
                            <td>{{$value->semestre}}</td>
                            @if($userType=Session::get('user')['admin'] == 1)
                            <td>
                                <a href="/ucs/edit/{{$value->id}}"><button type="button" class="btn btn-success btn-sm">Editar</button></a>
                                <a href="/ucs/destroy/{{$value->id}}"><button type="button" class="btn btn-danger btn-sm">Apagar</button></a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>

@endsection

