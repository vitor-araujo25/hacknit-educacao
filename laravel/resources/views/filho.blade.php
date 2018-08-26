@extends('master')


@section('css')

	<link type="text/css" rel="stylesheet" href="calendario.css" media="screen, projection"/> <!-- Página CSS que eu altero-->

@stop

@section('content')

	<!--NAVBAR --> 
	<nav>
		<div class="nav-wrapper">
	  		<a href='/perfil' class="brand-logo left">S.O.S</a>
	  		<a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
  			<ul class="right hide-on-med-and-down">
    			<li class="active"><a href="/perfil">Perfil</a></li>
    			<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>

    			<li><a href="collapsible.html">Sair da conta</a></li>
  			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
    	<li><a href="perfil">Perfil</a></li>
    	<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>

    	<li><a href="collapsible.html">Sair da Conta</a></li>
  	</ul>


  	<div class= 'container'>

  		<a href='/perfil' class='waves-effect waves-light btn-back margin'><i class="material-icons left">arrow_back</i>Voltar para a página anterior</a>

		<div class="col s12 m7">
			<h2 class="subtitulo header">Dados:</h2>
			<div class="card horizontal">
		  		
		  		<div class="card-stacked">
		    		<div class="card-content">
		    			<div class='container'>
		    				<div class='row'>
		    					<h3 class='subtitulo'> Nome: </h3>
		    					<p class='nome col s12 m6 offset-m1'> nomeeee </p>
		    				</div>
							<div class='row'>
		    					<h3 class='subtitulo'> Escola: </h3>
		    					<p class='nome col s12 m6 offset-m1'> escolaaaa </p>
		    				</div>
							<div class='row'>
		    					<h3 class='subtitulo'> Turma: </h3>
		    					<p class='nome col s12 m6 offset-m1'> turmaaa </p>
		    				</div>
							<div class='row'>
		    					<h3 class='subtitulo'> Série: </h3>
		    					<p class='nome col s12 m6 offset-m1'> sérieeeeee </p>
		    				</div>
		    			</div>
		    		</div>
		  		</div>
			</div>
		</div>


		<div class="col s12 m7">
			<div class="card horizontal">
		  		<div class="card-stacked">
		    		<div class="card-content">
	    				<div class='row center'>
	    					<a class='datepicker btn-card col s12 m12'> Presença </a>
	    				</div>
		    		</div>
		  		</div>
			</div>
		</div>

		<div class="col s12 m7">
			<div class="card horizontal">
		  		<div class="card-stacked">
		    		<div class="card-content">
	    				<div class='row center'>
	    					<a href='/notas' class='btn-card col s12 m12'> Notas </a>
	    				</div>
		    		</div>
		  		</div>
			</div>
		</div>

		<div class="col s12 m7">
			<div class="card horizontal">
		  		<div class="card-stacked">
		    		<div class="card-content">
	    				<div class='row center'>
	    					<a href='/previsao' class='btn-card col s12 m12'> Previsão do rendimento </a>
	    				</div>
		    		</div>
		  		</div>
			</div>
		</div>

	</div>

  	@include('footer')

@stop