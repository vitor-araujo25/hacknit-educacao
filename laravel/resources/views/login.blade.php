@extends('master')

@section('content')

	@if (Request::is('loginResponsavel')) <!-- Página de login para o Responsável da criança-->

		<div class='container'>
			<div class='row'>
				<h1 class='titulo'> Bem vindo!</h1>
			</div>
			<div class="row">
	    		<form class="col s12">

	      			<div class="row">
	        			<div class="input-field col s12">
				            <input id="cpf" type="text" class="validate">
				            <label for="cpf">CPF:</label>
	            			<span class="helper-text" data-error="wrong" data-success="right">Entrar somente com os números</span>
	          			</div>
	        		</div>

				    <div class="row">
				        <div class="input-field col s12">
				          <input id="password" type="password" class="validate">
				          <label for="password">Senha</label>
				        </div>
		      		</div>

	    		</form>
	  		</div>
	  	</div>
	@endif

	@if (Request::is('loginEscola'))
		<h1> Tchay </h1>
	@endif

@stop