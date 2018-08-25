@extends('master')

@section('content')


	<!--NAVBAR --> 
  <nav>
    <div class="nav-wrapper">
	  	<a href="/perfil" class="brand-logo left">Logo</a>
	  	<a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
  		<ul class="right hide-on-med-and-down">
    		<li><a href="/perfil">Perfil</a></li>
    		<li class="active"><a href="/matricula">Situação Matricula</a></li>
        <li class="active"><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
    		<li><a href="collapsible.html">Sair da conta</a></li>
  		</ul>
		</div>
	</nav>
  
  <ul class="sidenav" id="mobile-demo">
    <li><a href="/perfil">Perfil</a></li>
    <li><a href="/matricula">Situação da Matricula</a></li>
    <li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
    <li><a href="collapsible.html">Sair da Conta</a></li>
  </ul>


  @include('footer')

@stop