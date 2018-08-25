@extends('master')

@section('content')
    <div class='home container'>

        <div class='row'>
                <h1 class='titulo col s12'> Quem é você? </h1>
        </div>

        <div class='row center'>
            <a href="/loginResponsavel" class="btn waves-effect waves-light btn-large col s12 m5">Responsável</a>
        </div>
        <div class='row center'>
             <a href="/loginEscola" class="btn waves-effect waves-light btn-large col s12 m5">Escola</a>
        </div>
     </div>


@stop
