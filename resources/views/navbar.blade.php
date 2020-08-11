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


  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
      @guest
        <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
      @endguest
  </ul>
</nav>