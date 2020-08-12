@extends('layout.app', ["current" => "/"])

@section('body')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Olá,  {{ Auth::user()->name }}!</h1>
          <p>Esta é a plataforma para o cadastro e controle de novos recursos de nossas corretoras. Comece com escolhendo alguma funcionalidade abaixo ou no menu, onde você poderá criar, editar ou buscar dados. </p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Veja mais &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Clientes</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="/clientes" role="button">Ver lista &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Condomínios</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="/condominios" role="button">Ver lista &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Corretoras</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="/administradoras" role="button">Ver lista &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->
@endsection