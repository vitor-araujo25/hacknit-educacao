@extends('master')

@section('content')
	<!--NAVBAR --> 
	<nav>
		<div class="nav-wrapper">
	  		<a href='/perfil' class="brand-logo left">Logo</a>
	  		<a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
  			<ul class="right hide-on-med-and-down">
    			<li class="active"><a href="/perfil">Perfil</a></li>
    			<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
    			<li><a href="collapsible.html">Sair da conta</a></li>
  			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
    <li><a href="/perfil">Perfil</a></li>
    <li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
    <li><a href="collapsible.html">Sair da Conta</a></li>
  </ul>


  <a href='/filho' class='waves-effect waves-light btn-back margin'><i class="material-icons left">arrow_back</i>Voltar para a página anterior</a>
  @include('footer')

@stop