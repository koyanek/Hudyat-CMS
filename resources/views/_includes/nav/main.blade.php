<div id="app">
      <nav class="navbar has-shadow">
        <div class="container">
          <div class="navbar-start">
            <a href="{{route('home')}}">
              <img src="{{asset('images/hudyat_logo.png')}}" alt="Hudyat Logo">
            </a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
          </div>

          <div class="navbar-end" style="overflow: visible;">
            @if (Auth::guest())
            <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
            <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
            @else
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">Welcome, {{ Auth::User()->name}}</a>

              <ul class="navbar-dropdown">
                <li><a href="#" class="dropdown-item"><span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o">
                </i></span><strong>Profile</strong></a></li>
                <li><a href="#" class="dropdown-item"><span class="icon"><i class="fa fa-fw m-r-10 fa-bell">
                </i></span><strong>Notification</strong></a></li>
                <li><a href="{{route('manage.dashboard')}}" class="dropdown-item"><span class="icon"><i class="fa fa-fw m-r-10 fa-cog">
                </i></span><strong>Manage</strong></a></li>
                <hr class="dropdown-divider">
                <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                         class="dropdown-item"><span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out">
                  </i></span><strong>Logout</strong></a>
                  @include('_includes.forms.logout')
                </li>
              </ul>
            </div>
            @endif
        </div>
      </nav>
</div>
