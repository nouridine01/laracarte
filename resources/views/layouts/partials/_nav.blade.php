<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mr-auto">
          <li class="nav-item {{set_active_route('home')}}">
            <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{set_active_route('about')}}">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="#">Artisans</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet
            </a>
            <ul class="dropdown-menu">
              <li><a href="https://laravel.io">Laravel.io</a></li>
              <li><a href="https://laravel.com">Laravel.com</a></li>
              <li><a href="https://laracasts.com">Laracasts</a></li>
              <li><a href="https://Larajobs.com">Larajobs</a></li>
              <li><a href="https://laravel-news.com">laravel News</a></li>
              <li><a href="https://larachat.com">Larachat</a></li>
            </ul>
          </li>
          <li class="nav-item {{set_active_route('contact')}}">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-rigth">
          <li class="nav-item active">
            <a class="nav-link" href="#">Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
        </ul>
      </div>
  </div>
</nav>