<header>
  <div class="">
    <img src="{{asset('img/logo.png')}}" alt="">

  </div>
  <div class="header-pages">
    <ul>
      <li><a href="{{route('pagina-home')}}" class="{{(Request::route()->getName() == 'pagina-home' ? 'active' : '')}}">home</a> </li>
      <li><a href="{{route('pagina-prodotti')}}" class="{{(Request::route()->getName() == 'pagina-prodotti' ? 'active' : '')}}" >prodotti</a> </li>
      <li><a href="{{route('pagina-notizie')}}" class="{{(Request::route()->getName() == 'pagina-notizie' ? 'active' : '')}}">news</a> </li>
    </ul>
  </div>

</header>
