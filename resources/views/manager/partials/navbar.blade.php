<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prev</b>Class</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
          <a href="{{route('manager.profile')}}" class="dropdown-toggle" data-toggle="dropdown">
              {{-- <img src="{{asset('images/profile.jpg')}}" class="user-image" alt="User Image"> --}}
              <img class="user-image" src="{{url('storage/managers/'.Auth::guard('manager')->user()->avatar)}}" />

            <span class="hidden-xs">{{Auth::guard('manager')->user()->name}}</span>
            </a>
         
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
          <a href="{{route('manager.logout')}}" data-toggle=""><i class="fa fa-power-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

{{-- <header class="main-header">
<!-- Logo -->
    <a href="{{ route('admin.home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>C</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Prev</b>Class</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Trocar navegação</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
        @guest 
                    @else
            <ul class="nav navbar-nav">
                               
                    
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ Auth::guard('admin')->user()->name }} | <i class="fa fa-fw fa-power-off"></i> Sair
                    </a>
                    <form id="logout-form" action="" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                    </form
                    >
                </li>
            </ul>
            @endguest
        </div>
    </nav>
</header> --}}

