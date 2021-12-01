@extends('master')
@section("content")
    <div class="container">
        <div class="titleCustom"><h2>Regimes</h2></div>
        <div class="row">

            <div class="col-12">
                @if($userType=Session::get('user')['admin'] == 1)
                <a href="/regimes/create/"><button type="button" class="btn btn-success novoBtn">Criar Novo Regime</button></a>
                @endif

                <table class="table" border="1">

                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sigla</th>
                        <th scope="col">Descrição</th>
                        @if($userType=Session::get('user')['admin'] == 1)
                        <th></th>
                        @endif
                    </tr>
                    </thead>

                    <tr>
                    @foreach($regimes as $value)
                        <tr>
                            <td><a href="/regimes/detail/{{$value->id}}"><button type="button" class="btn btn-ver btn-sm hundred">Ver</button></a></td>

                            <td>{{$value->id}}</td>
                            <td>{{$value->regime}}</td>
                            <td>{{$value->sigla}}</td>
                            <td>{{$value->descricao}}</td>
                            @if($userType=Session::get('user')['admin'] == 1)
                            <td>
                                <a href="/regimes/edit/{{$value->id}}"><button type="button" class="btn btn-success btn-sm">Editar</button></a>
                                <a href="/regimes/destroy/{{$value->id}}"><button type="button" class="btn btn-danger btn-sm">Apagar</button></a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>

@endsection

