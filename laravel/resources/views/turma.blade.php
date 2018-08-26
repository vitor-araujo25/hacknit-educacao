@extends('master')

@section('content')
	<nav>
		<div class="nav-wrapper">
			<a href='/painel' class="brand-logo left">S.O.S</a>
			<a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li class="active"><a href="/perfil">Painel</a></li>
				<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
				<li><a href="collapsible.html">Sair da conta</a></li>
			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
		<li class="active"><a href="/perfil">Painel</a></li>
		<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
		<li><a href="collapsible.html">Sair da conta</a></li>
  	</ul>


  	<div class='container'>

  		<a href='/painel' class='waves-effect waves-light btn-back margin'><i class="material-icons left">arrow_back</i>Voltar para a página anterior</a>


		<h2 class="subtitulo header">Escolha o aluno:</h2>
	  	<div id="serie1" class="col s12">
	        <div class="btn-turma collection">
	        	<a href="/aluno" class="collection-item">Aluna</a>
	        	<a href="#!" class="collection-item">Aluno</a>
	        	<a href="#!" class="collection-item"> Aluno</a>
	        	<a href="#!" class="collection-item">Aluno</a>
	        </div>
	    </div>
	</div>



  	@include('footer')

@stop