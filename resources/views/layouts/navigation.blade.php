<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('index')}}">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
         </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="{{route('showp')}}" class="nav-link">products</a></li>

          @auth
           @if(Auth::user()->role!='admin')
           <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
           <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          @endif
          @if(Auth::user()->role=='admin')
          <li class="nav-item"><a href="{{ url('/admin') }}" class="nav-link">Admin panel</a></li>
          <li class="nav-item"><a href="{{route('createproducts')}}" class="nav-link">create-product</a></li>
          <li class="nav-item"><a href="{{route('listadmin')}}" class="nav-link">admins</a></li>
          <li class="nav-item active"><a href="{{route('showusers')}}" class="nav-link">users</a></li>

          @endif
          @endauth
          @if (Route::has('login'))
          @auth
          <li class="nav-item cart"><a href="{{route('cart')}}" class="nav-link"><span class="icon icon-shopping_cart"><span class="badge" style="background-color: brown">
           <livewire:notif/>
        </span></span></a>
        @endauth
        @endif
          @if (Route::has('login'))
                @auth  
                @else
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">login</a></li>
                @if (Route::has('register'))
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">register</a></li>                        @endif
                @endauth
        @endif
        
        </ul>
      </div>
    


    
      @auth
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <strong> {{ Auth::user()->name }}</strong>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">edit</a>
            <a class="dropdown-item">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </a>
              </form>
          </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        @endauth
    </div>
  </nav>