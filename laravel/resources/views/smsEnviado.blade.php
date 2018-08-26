@extends('master')

@section('content')
	<!--NAVBAR -->
    	<nav>
    		<div class="nav-wrapper">
    	  		<a href='/perfil' class="brand-logo left">S.O.S</a>
    	  		<a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
      			<ul class="right hide-on-med-and-down">
        			<li><a href="/perfil">Perfil</a></li>
        			<li class="active"><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
        			<li><a href="collapsible.html">Sair da conta</a></li>
      			</ul>
    		</div>
    	</nav>


    <ul class="sidenav" id="mobile-demo">
        <li class="active"><a href="/perfil">Painel</a></li>
        <li><a href="/acompanhamento">Acompanhamento do Municipio</a></li>
        <li><a href="collapsible.html">Sair da conta</a></li>

     </ul>

     <div class='margin container'>

        <div class='row'>
                <h1 class='titulo col s12' style="color: black"> S.M.S. enviado. </h1>
        </div>
    </div>


  @include('footer')

@stop

<?php

$API_Key = "1231befcb534e764eb6124cf4ab41ee0f9a127bbZNK0rvwM8Tvw7klSllsXkxkRV";

$ch = curl_init('https://textbelt.com/text');

$data = array(
  'phone' => '+5521995405544',
  'message' => $_GET["mensagem"],
  'key' => $API_Key,
);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

?>