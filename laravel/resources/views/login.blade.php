@extends('master')

@section('content')

	@if (Request::is('loginResponsavel')) <!-- Página de login para o Responsável da criança-->

		<div class='login container'>
			<div class='row'>
				<h1 class='titulo'> Bem vindo!</h1>
			</div>
			<div class="row center">
	    		<form class="col s12">
	      			<div class="row">
	        			<div class="input-field col s12 m7 l7">
				            <input id="cpf" type="text" class="validate" required>
				            <label for="cpf">CPF</label>
	            			<span class="helper-text" data-error="Favor entrar com CPF" data-success="">Entrar somente com os números</span>
	          			</div>
	        		</div>

				    <div class="row">
				        <div class="input-field col s12 m7 l7">
				          <input id="password" type="password" class="validate" required>
				          <label for="password">Senha</label>
				        </div>
		      		</div>

		      		<div class='row'>
		      			<input type='submit' class='btn waves-effect waves-light btn-large col s12 m5' value='Acessar Conta'>
		      		</div>
		      		<div class='row'>
		      			<a href='/cadastro' class=''> Ainda não tem conta? Cadastre-se! </a>
		      		</div>
	    		</form>
	  		</div>
	  	</div>
	@endif

	@if (Request::is('loginEscola'))

		<div class='login container'>
			<div class='row'>
				<h1 class='titulo'> Bem vindo!</h1>
			</div>
			<div class="row center">
	    		<form class="col s12">
	      			<div class="row">
	        			<div class="input-field col s12 m7 l7">
				            <input id="email" type="email" class="validate" required>
				            <label for="email">E-mail</label>
	            			<span class="helper-text" data-error="Favor entrar com o E-mail da escola" data-success="">Entre com o e-mail da escola</span>
	          			</div>
	        		</div>

				    <div class="row">
				        <div class="input-field col s12 m7 l7">
				          <input id="password" type="password" class="validate" required>
				          <label for="password">Senha</label>
				        </div>
		      		</div>

		      		<div class='row'>
		      			<input type='submit' class='btn waves-effect waves-light btn-large col s12 m5' value='Acessar Conta'>
		      		</div>
	    		</form>
	  		</div>
	  	</div>
	@endif

@stop