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

  	<div class= 'perfil container'>
		<div class="col s12 m7">
			<h2 class="subtitulo header">Seus dados:</h2>
			<div class="card horizontal">
		  		
		  		<div class="card-stacked">
		    		<div class="card-content">
		    			<div class='container'>
		    				<div class='row'>
		    					<h3 class='subtitulo'> Nome: </h3>
		    					<p class='nome col s12 m6 offset-m1'> nomeeee </p>
		    				</div>
							<div class='row'>
		    					<h3 class='subtitulo'> CPF: </h3>
		    					<p class='nome col s12 m6 offset-m1'> 000.000.000-00 </p>
		    				</div>
		    			</div>
		    		</div>
		  		</div>
			</div>
		</div>

		<h2 class='subtitulo'> Filho(s) </h2>
		<div class="col s12 m7">
			<div class="card horizontal">
		  		<div class="card-stacked">
		    		<div class="card-action">
		    			<a href='/filho' class='card-filho waves-effect waves-light'> Nome do Filho </a>

		    		</div>
		  		</div>
			</div>
		</div>
  	</div>

  	@include('footer')
@stop
