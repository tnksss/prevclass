  <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('storage/managers/'.Auth::guard('web')->user()->avatar)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <p>Professor</p>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            
            
            <li>
                <a href="">
                    <i class="fa fa-users"></i> <span>Meu Perfil</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">\\\\</small>
                    </span>
                </a>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Relatórios</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>
            </li>
        
      </ul>
    </section>
  </aside>