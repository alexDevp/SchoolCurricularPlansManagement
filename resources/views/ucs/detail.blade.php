@extends('master')
@section("content")
    <div class="container align">
        <a href="/ucs/"><button type="button" class="btn btn-danger">Voltar</button></a>
        <div class="titleCustom"><h2>Unidade Curricular:</h2></div>

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
    </div>
@endsection
