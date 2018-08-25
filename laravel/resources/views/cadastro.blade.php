@extends('master')

@section('content')

	<div class='cadastro container'>
		<div class='row'>
			<h1 class='titulo col s12'> Cadastre-se</h1> 
		</div>

		<div class="row center">
    		<form class="col s12">
      		
				<div class="row">
        			<div class="input-field col s12 m7 l7">
			            <input id="name" type="text" class="validate" required>
			            <label for="name">Nome Completo</label>
            			<!--<span class="helper-text" data-error="Favor entrar com CPF" data-success="">Entrar somente com os números</span>-->
          			</div>
        		</div>

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
	      			<!--Na função de cadastro, chamar a página de login -->
		      		<input type='submit' class='btn waves-effect waves-light btn-large col s12 m5' value='Me cadastrar'>
	      		</div>
    		</form>
  		</div>
	</div>


@stop