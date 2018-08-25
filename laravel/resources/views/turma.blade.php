@extends('master')

@section('content')
	<nav>
		<div class="nav-wrapper">
			<a href='/painel' class="brand-logo left">Logo</a>
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