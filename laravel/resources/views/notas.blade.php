@extends('master')

@section('content')
	<!--NAVBAR --> 
	<nav>
		<div class="nav-wrapper">
	  		<a href='/perfil' class="brand-logo left">S.O.S</a>
	  		<a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
  			<ul class="right hide-on-med-and-down">
    			<li><a lass="active" href="/perfil">Perfil</a></li>
    			<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
    			<li><a href="/home">Sair da conta</a></li>
  			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
  	<li><a href="/perfil">Perfil</a></li>
  	<li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
  	<li><a href="/home">Sair da Conta</a></li>
  </ul>

  <div class='container'>
    <div class='row'>
        <a href='/filho' class='waves-effect waves-light btn-back margin'><i class="material-icons left">arrow_back</i>Voltar para a página anterior</a>
    </div>

    <table>
        <thead>
          <tr>
              <th></th>
              <th>Prova 1</th>
              <th>Prova 2</th>
              <th>Prova 3</th>
              <th>Prova 4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Matemática</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
          <tr>
            <td>Português</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
          <tr>
            <td>Inglês</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
          <tr> 
            <td> Ciência </td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
          <tr>
            <td> História </td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
          <tr> 
            <td> Geografia </td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
          <tr> 
            <td> Educação Física </td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
          <tr>
            <td> Artes </td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
        </tbody>
      </table>
  </div>

  @include('footer')

@stop