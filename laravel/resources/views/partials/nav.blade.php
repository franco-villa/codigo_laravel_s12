
<thead class="table table-bordered">
  <tr>      
    <th scope="col" class="{{ request()->routeIs('home') ? 'activo' : '' }}"><a href="{{ route('home') }}">Home</a></th> 
    <th scope="col" class="{{ request()->routeIs('nosotros') ? 'activo' : ''}}"><a href="{{ route('nosotros') }}">Nosotros</a></th> 
    <th scope="col" class="{{ request()->routeIs('servicios') ? 'activo' : ''}}"><a href="{{ route('servicios.index') }}">Servicios</a></th> 
    <th scope="col" class="{{ request()->routeIs('contacto') ? 'activo' : ''}}"><a href="{{ route('contacto') }}">Contacto</a></th> 
    @guest
      <th>
        <a href="{{ route('login') }}">Login</a>
      </th> 
    @else
      <th>
        <a href="#" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();">Cerrar Sesión</a>
      </th> 
    @endguest
  </tr>
</thead>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

    




