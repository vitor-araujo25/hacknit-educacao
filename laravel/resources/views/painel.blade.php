@extends('master')

@section('content')

  <nav class="nav-extended">
    <div class="nav-wrapper">
  		<a href='/painel' class="brand-logo left">Logo</a>
  		<a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li class="active"><a href="/perfil">Painel</a></li>
			<li><a href="/acompanhamentoEscola">Acompanhamento do Municipio</a></li>
			<li><a href="collapsible.html">Sair da conta</a></li>
		</ul>
    </div>

    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class='active' href="#serie1">Série 1</a></li>
        <li class="tab"><a href="#serie2">Série 2</a></li>
        <li class="tab"><a href="#serie3">Série 3</a></li>
        <li class="tab"><a href="#serie4">Série 4</a></li>
        <li class="tab"><a href="#serie5">Série 5</a></li>
        <li class="tab"><a href="#serie6">Série 6</a></li>
        <li class="tab"><a href="#serie7">Série 7</a></li>
        <li class="tab"><a href="#serie8">Série 8</a></li>
        <li class="tab"><a href="#serie9">Série 9</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
		<li class="active"><a href="/perfil">Painel</a></li>
		<li><a href="/acompanhamentoEscola">Acompanhamento do Municipio</a></li>
		<li><a href="collapsible.html">Sair da conta</a></li>

  </ul>

  	<div class='margin container'>

	  	<div id="serie1" class="col s12">
	        <div class="btn-turma collection">
	        <a href="/turma" class="collection-item">Turma 1</a>
	        <a href="#!" class="collection-item">Turma 2</a>
	        <a href="#!" class="collection-item">Turma 3</a>
	        <a href="#!" class="collection-item">Turma 4</a>
	      </div>
	    </div>
	</div>
  <div id="serie2" class="col s12">Test 2</div>
  <div id="serie3" class="col s12">Test 3</div>
  <div id="serie4" class="col s12">Test 4</div>


	@include('footer')
@stop