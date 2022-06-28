 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000;font-family: 'Quantico', sans-serif;">
     <div class="container">
         <a class="navbar-brand" href="{{ route('home') }}"><img src="assets/images/logo.png" alt="EasySport"
                 style="height: 50px" /></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             @if (!Auth::guest())
                 <ul class="navbar-nav mr-auto">
                     <li>
                         <a class="nav-link" href="{{ route('bookings') }}">Reservas</a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{ route('suscriptions') }}">Suscripciones</a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{ route('home') }}">Instalaciones</a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{ route('classes') }}">Clases</a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                     </li>
                 </ul>
                 <ul class="navbar-nav ml-auto">
                     <li>
                         <a data-toggle="modal" data-target="#editarPerfil" class="nav-link" href="#">Perfil</a>
                         @include('perfil');
                     </li>
                     <li>
                         <a class="nav-link" href="{{ route('logout') }}"
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             Cerrar Sesión
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                     </li>
                 </ul>
             @endif
         </div>
     </div>
 </nav>
