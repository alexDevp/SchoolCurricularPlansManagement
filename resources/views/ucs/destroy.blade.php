@extends('master')
@section("content")
    <div class="container align">
        <div class="titleCustom"><h2>Deseja Eliminar esta Unidade Curricular?</h2></div>

        <label class="titleCustom">Código:</label><br>
        <p class="fieldCustom">{{$uc['codigo']}}</p>
        <label class="titleCustom">Nome:</label><br>
        <p class="fieldCustom">{{$uc['nome']}}</p>
        <label class="titleCustom">Créditos:</label><br>
        <p class="fieldCustom">{{$uc['creditos']}}</p>
        <label class="titleCustom">Duração:</label><br>
        <p class="fieldCustom">{{$uc['duracao']}}</p>
        <label class="titleCustom">Teórica:</label><br>
        <p class="fieldCustom">{{$uc['teorica']}}</p>
        <label class="titleCustom">Prática:</label><br>
        <p class="fieldCustom">{{$uc['pratica']}}</p>
        <label class="titleCustom">Ano:</label><br>
        <p class="fieldCustom">{{$uc['ano']}}</p>
        <label class="titleCustom">Semestre:</label><br>
        <p class="fieldCustom">{{$uc['semestre']}}</p>
        <div class="endPage">
            <a href="/ucs/"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <a href="/ucs/deleteReg/{{$uc['id']}}"><button type="button" class="btn btn-success">Confirmar</button></a>
        </div>

    </div>
@endsection
