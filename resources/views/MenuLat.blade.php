@section('MenuLat')
<ul id="js-nav-menu" class="nav-menu">
    <li>
      <a href="{{ action('ListaNegraController@List') }}" title="Inicio" data-filter-tags="application intel">
          <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
          <span class="nav-link-text" data-i18n="nav.application_intel">Inicio</span>
      </a>
    </li>
    <li>
      <a href="{{ action('ListaNegraController@busquedaMasivaApp') }}" title="Busqueda" data-filter-tags="application intel">
          <i class="fas fa-cog" aria-hidden="true"></i>
          <span class="nav-link-text" data-i18n="nav.application_intel">Busqueda Masiva</span>
      </a>
    </li>                                                                  
</ul>
@endsection