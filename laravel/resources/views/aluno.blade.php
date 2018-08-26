@extends('master')

@section('content')

  <nav class="nav-extended">
    <div class="nav-wrapper">
  		<a href='/painel' class="brand-logo left">Logo</a>
  		<a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li class="active"><a href="/perfil">Painel</a></li>
			<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
			<li><a href="collapsible.html">Sair da conta</a></li>
		</ul>
    </div>

    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class='active' href="#advertencia">Advertências</a></li>
        <li class="tab"><a href="#notas">Notas</a></li>
        <li class="tab"><a href="#presenca">Presença</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
		<li class="active"><a href="/perfil">Painel</a></li>
		<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
		<li><a href="collapsible.html">Sair da conta</a></li>

  </ul>

  <div class='container'>
    <a href='/turma' class='waves-effect waves-light btn-back margin'><i class="material-icons left">arrow_back</i>Voltar para a página anterior</a>
  </div>


	<div id="advertencia">
    <div class='container'>
      <h1 class='subtitulo'> Envie o S.M.S para o pai do Aluno </h1> 
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea" data-length="160"></textarea>
                <label for="sms">Corpo do SMS</label>
              </div>
            </div>
            <div class='row center'>
               <input type='submit' class="btn waves-effect waves-light btn-large" value='Enviar!'>
            </div>
          </form>
      </div>
    </div>
  </div>


  <div id="notas">
    <div class='container'>
      <h2 class='subtitulo'> Do Primeiro ao Quinto ano </h2>
      <div class='row'>
        <div class="col s12 m6 l6">
            Conceito:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>
      </div>

      <h2 class='subtitulo'> Do Quinto ao nono ano </h2>
      <div class="row">
          <div class="col s12 m6 l6">
            Matemática:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>
          <div class="col s12 m6 l6">
            Português:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>
          <div class="col s12 m6 l6">
            Inglês:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>
          <div class="col s12 m6 l6">
            História:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>
          <div class="col s12 m6 l6">
            Geografia:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>        
          <div class="col s12 m6 l6">
            Ciência:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>
          <div class="col s12 m6 l6">
            Educação Física:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>
          <div class="col s12 m6 l6">
            Artes:
            <div class="input-field inline">
              <input id="nota_inline" type="number" class="validate">
              <label for="nota_inline">Nota</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="presenca" class="col s12">Test 3</div>

  @include('footer')
@stop