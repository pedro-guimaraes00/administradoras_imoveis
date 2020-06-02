<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">IMÓVEIS©</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li @if($current=="clientes") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="#">Clientes</a>
        </li>
        <li @if($current=="condominios") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="#">Condomínios</a>
        </li>
        <li @if($current=="corretoras") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/administradoras">Corretoras</a>
        </li>
        <li @if($current=="unidades") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="#">Unidades</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>