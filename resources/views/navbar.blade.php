<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">IMÓVEIS©</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li @if($current=="clientes") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/clientes">Clientes</a>
        </li>
        <li @if($current=="condominios") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/condominios">Condomínios</a>
        </li>
        <li @if($current=="corretoras") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/administradoras">Corretoras</a>
        </li>
        <li @if($current=="unidades") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="#">Unidades</a>
        </li>
      </ul>
    </div>
  </nav>