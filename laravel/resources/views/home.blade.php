@extends('master')

@section('content')
    <!--NAVBAR -->
    <nav>
        <div class="nav-wrapper">
            <a href='/loginResponsavel' class="brand-logo center">S.O.S</a>
            <a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/loginResponsavel">Login</a></li>
                <li><a href="/acompanhamentoLogin">Acompanhamento do Municipio</a></li>
            </ul>
        </div>
    </nav>


    <ul class="sidenav" id="mobile-demo">
        <li><a href="/loginResponsavel">Login</a></li>
        <li><a href="/acompanhamentoLogin">Acompanhamento do Municipio</a></li>
    </ul>
    <div class='margin container'>

        <div class='row'>
                <h1 class='titulo col s12'> Quem é você? </h1>
        </div>

        <div class='center row'>
            <a href="/loginResponsavel" class="btn waves-effect waves-light btn-large col s12 m5 offset-m3 l4 offset-l4">Responsável</a>
        </div>
        <div class='row center'>
             <a href="/loginEscola" class="btn waves-effect waves-light btn-large col s12 m5 offset-m3 l4 offset-l4">Escola</a>
        </div>
     </div>

     @include('footer')
@stop
