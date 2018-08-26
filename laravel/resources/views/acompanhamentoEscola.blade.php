@extends('master')

@section('content')
	<!--NAVBAR -->
      <nav>
        <div class="nav-wrapper">
            <a href='/painel' class="brand-logo left">S.O.S</a>
            <a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/painel">Painel</a></li>
                <li class='active'><a href="/acompanhamentoEscola">Acompanhamento do Municipio</a></li>
                <li><a href="collapsible.html">Sair da conta</a></li>
            </ul>
        </div>
      </nav>

    <ul class="sidenav" id="mobile-demo">
        <li class="active"><a href="/painel">Painel</a></li>
        <li><a href="/acompanhamentoEscola">Acompanhamento do Municipio</a></li>
        <li><a href="collapsible.html">Sair da conta</a></li>

     </ul>


    <div class="container" style= "margin-top: 3em">
        <div class="row">
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/1 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Primeira Série</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/2 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Segunda Série</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/3 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Terceira Série</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/4 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Quarta Série</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/5 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Quinta Série</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/6 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Sexta Série</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/7 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Sétima Série</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/8 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Oitava Série</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/9 serie.png">
                    </div>
                    <div class="card-content" style="background-color: #F7BC8E">
                        <span class="legenda-grafico">Nona Série</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  @include('footer')

@stop
