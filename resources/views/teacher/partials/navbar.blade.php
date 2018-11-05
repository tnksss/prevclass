<header class="main-header">
    <!-- Logo -->
    <a href="{{route('teacher.home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="{{asset('prevclass.png')}}" heigh="45px" width="45px" alt=""></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{asset('prevclass.png')}}" heigh="45px" width="45px" alt=""><b>Prev</b>Class</span>
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
              <img class="user-image" src="{{url('storage/managers/'.Auth::guard('web')->user()->avatar)}}" />

            <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
         
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
          <a href="{{route('logout')}}" data-toggle=""><i class="fa fa-power-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>