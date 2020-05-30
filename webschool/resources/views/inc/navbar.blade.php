<nav class="navbar navbar-expand-lg navbar-light bg-nav-link">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">SCHOOL school</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
 <body>
 </body>
    

</nav> 
 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>
          
         
          <ul class="navbar-nav ml-auto">
            <div class="collapse navbar-collapse"  class=" bg-success text-white">
                <div class="navbar-nav ">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ '/galary' }}">{{ __('galary') }}</a>
                  </li>
            <div class="collapse navbar-collapse"  class=" bg-success text-white">
                <div class="navbar-nav ">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ '/teachers' }}">{{ __('Our Teachers') }}</a>
                  </li>
                  <div class="collapse navbar-collapse"  class=" bg-success text-white">
                    <div class="navbar-nav ">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ '/student' }}">{{ __('Apply') }}</a>
                      </li>
                      <div class="collapse navbar-collapse"  class=" bg-success text-white">
                        <div class="navbar-nav ">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ '/aboutus' }}">{{ __('About us') }}</a>
                              
                          </li>
              <div class="collapse navbar-collapse"  class=" bg-success text-white">
            <div class="navbar-nav ">
              <li class="nav-item">
                  <a class="nav-link" href="{{ '/home' }}">{{ __('post') }}</a>
              </li>


            <div class="collapse navbar-collapse">
             <input type="text" placeholder="Search..." name="search">
                <button type="submit">search</button>
              </form>
            </div>
      
              
    @guest
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup"  class=" bg-success text-white">
                <div class="navbar-nav ">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
              <li>
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" >
                      
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>  </li>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
        </div>
    </div> </div>
</div>
</div>
</nav>
</div>

