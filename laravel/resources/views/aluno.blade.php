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
          <form action='smsEnviado' method="get" class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea" name="mensagem" data-length="160"></textarea>
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

     <h2 class='subtitulo'> Do Quinto ao Nono ano </h2>

      <div class="row">
        <form class="col s12">
          <div class="row">
            <h5 class='materia'> Matemática </h5>
            <div class="input-field col s6">
              <input id="nota" type="text" class="validate">
              <label for="nota">Nota</label>
            </div>
            <div class="input-field col s6">
              <input id="prova" type="text" class="validate">
              <label for="prova">Prova</label>
              <span class="helper-text" data-error="wrong" data-success="right">P1, P2, P3 ou P4</span>
            </div>
          </div>
          <div class="row">
            <h5 class='materia'> Português </h5>
            <div class="input-field col s6">
              <input id="nota" type="text" class="validate">
              <label for="nota">Nota</label>
            </div>
            <div class="input-field col s6">
              <input id="prova" type="text" class="validate">
              <label for="prova">Prova</label>
              <span class="helper-text" data-error="wrong" data-success="right">P1, P2, P3 ou P4</span>
            </div>
          </div>
          <div class="row">
            <h5 class='materia'> Inglês </h5>
            <div class="input-field col s6">
              <input id="nota" type="text" class="validate">
              <label for="nota">Nota</label>
            </div>
            <div class="input-field col s6">
              <input id="prova" type="text" class="validate">
              <label for="prova">Prova</label>
              <span class="helper-text" data-error="wrong" data-success="right">P1, P2, P3 ou P4</span>
            </div>
          </div>
          <div class="row">
            <h5 class='materia'> Ciência </h5>
            <div class="input-field col s6">
              <input id="nota" type="text" class="validate">
              <label for="nota">Nota</label>
            </div>
            <div class="input-field col s6">
              <input id="prova" type="text" class="validate">
              <label for="prova">Prova</label>
              <span class="helper-text" data-error="wrong" data-success="right">P1, P2, P3 ou P4</span>
            </div>
          </div>
          <div class="row">
            <h5 class='materia'> História </h5>
            <div class="input-field col s6">
              <input id="nota" type="text" class="validate">
              <label for="nota">Nota</label>
            </div>
            <div class="input-field col s6">
              <input id="prova" type="text" class="validate">
              <label for="prova">Prova</label>
              <span class="helper-text" data-error="wrong" data-success="right">P1, P2, P3 ou P4</span>
            </div>
          </div>
          <div class="row">
            <h5 class='materia'> Geografia </h5>
            <div class="input-field col s6">
              <input id="nota" type="text" class="validate">
              <label for="nota">Nota</label>
            </div>
            <div class="input-field col s6">
              <input id="prova" type="text" class="validate">
              <label for="prova">Prova</label>
              <span class="helper-text" data-error="wrong" data-success="right">P1, P2, P3 ou P4</span>
            </div>
          </div>
          <div class="row">
            <h5 class='materia'> Educação Física </h5>
            <div class="input-field col s6">
              <input id="nota" type="text" class="validate">
              <label for="nota">Nota</label>
            </div>
            <div class="input-field col s6">
              <input id="prova" type="text" class="validate">
              <label for="prova">Prova</label>
              <span class="helper-text" data-error="wrong" data-success="right">P1, P2, P3 ou P4</span>
            </div>
          </div>
          <div class="row">
            <h5 class='materia'> Artes </h5>
            <div class="input-field col s6">
              <input id="nota" type="text" class="validate">
              <label for="nota">Nota</label>
            </div>
            <div class="input-field col s6">
              <input id="prova" type="text" class="validate">
              <label for="prova">Prova</label>
              <span class="helper-text" data-error="wrong" data-success="right">P1, P2, P3 ou P4</span>
            </div>
          </div>
        </form>

      </div>
      
    </div>
  </div>

  <div id="presenca" class="col s12">Test 3</div>

  @include('footer')
@stop
