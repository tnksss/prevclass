  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('storage/managers/'.$manager->avatar)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::guard('manager')->user()->name}}</p>
          <p>Secretário</p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
      
        <li class="treeview">
        <a href="{{ route('manager.home') }}">
        
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>
          
        </li>
        <li>
        <a href="{{ route('manager.unity.show',['id' => Auth::guard('manager')->user()->id]) }}">
            <i class="fa fa-university"></i> <span>Meu Colégio</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">ok</small>
            </span>
          </a>
        </li>
        
        <li>
        <a href="{{route ('school-years',['id' => Auth::guard('manager')->user()->unity->id])}}">
            <i class="fa fa-calendar"></i> <span>Ano Letivo</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">ok</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-users"></i> <span>Professores</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">nop</small>
            </span>
          </a>
        </li>
        <li>
        <a href="{{route('grades.index')}}">
            <i class="fa fa-users"></i> <span>Turmas</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">nop</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-users"></i> <span>Professores / Turmas</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">nop</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-users"></i> <span>Alunos</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">nop</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-users"></i> <span>Matrículas</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">nop</small>
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
    <!-- /.sidebar -->
  </aside>