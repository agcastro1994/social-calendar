<sidebar>
    <div class="logo">
        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                                  <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <p>Logout</p>
                                        </a>



                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                   
                           <!--  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Logout <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> -->
                        @endguest
                    </ul>
                    <br>
                    <br>
    </div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name"> <h5>{{ Auth::user()->name }}</h5></div>
    </div>
    <nav class="menu">
      
      <a class="menu__item" href="/month/create">
        <i class="menu__icon fa fa-envelope"></i>
        <span class="menu__text">Crear un nuevo Mes</span>
      </a>
      <!-- <a class="menu__item" href="#">
        <i class="menu__icon fa fa-list"></i>
        <span class="menu__text">workout</span>
      </a> -->
      <a class="menu__item" href="/home">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">calendario</span>
      </a>
      <!-- <a class="menu__item" href="{{ URL::previous() }}">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">Atras</span>
      </a> -->
      <!-- <a class="menu__item" href="#">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">goals</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-trophy"></i>
        <span class="menu__text">achivements</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-sliders"></i>
        <span class="menu__text">measurements</span>
      </a> -->
      
    
      @foreach($month as $month)

      <?php

         $month_name=App\Month::month_name($month->id);

      ?>
        <a class="menu__item" href="/month/{{ $month->id }}"> 
            
            <span class='menu__text'> {{ $month_name }} {{ $month->year }}</span>;
              
              </a> 
        @endforeach
      
    </nav>
    <div class="copyright">copyright &copy; 2018</div>
  </sidebar>