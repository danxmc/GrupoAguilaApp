<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
   <a class="navbar-brand" href="{{ url('/home') }}">
		 <i class='uil uil-home'></i>HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<ul class="navbar-nav mr-auto">
  	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class='uil uil-list-ul'></i>CATALOGOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item disabled" href="{{ url('/usuarios') }}">USUARIOS</a>
          <a class="dropdown-item" href="{{ url('/equipos') }}">EQUIPOS</a>
          <a class="dropdown-item" href="{{ url('/aseguradoras') }}">ASEGURADORAS</a>
          <a class="dropdown-item" href="{{ url('/seguros') }}">SEGUROS</a>
          <a class="dropdown-item" href="{{ url('/clientes') }}">CLIENTES</a>
          <a class="dropdown-item" href="{{ url('/choferes') }}">CHOFERES</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class='uil uil-clipboard-notes'></i>FORMULARIOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/mantenimiento') }}">FORMULARIO DE MANTENIMIENTO</a>
          <a class="dropdown-item" href="{{ url('/mantpreventivo') }}">FORMULARIO DE MANTENIMIENTO PREVENTIVO</a>
          <a class="dropdown-item" href="{{ url('/trabajos') }}">FORMULARIO DE TRABAJO</a>
      </li>
  	</ul>
      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
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
                    </ul>
  </div>

</nav>