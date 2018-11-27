  <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <a href="{{route('manager.profile')}}">
                <img src="{{url('storage/managers/'.Auth::guard('manager')->user()->avatar)}}" class="img-circle img-mini" alt="User Image">
                </a>
            </div>
            <div class="pull-left info">
                <p>{{Auth::guard('manager')->user()->name}}</p>
                <p>Secretário</p>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li >
                <a href="{{ route('manager.home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('manager.myUnity') }}">
                    <i class="fa fa-university"></i> <span>Meu Colégio</span>
                
                </a>
            </li>
            {{-- <li class="treeview">
                    <a href="#">
                      <i class="fa fa-table"></i> <span>Professores</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>Geral</a></li>
                      <li><a href="{{route('supplies.index')}}"><i class="fa fa-circle-o"></i>Supridos</a></li>
                    </ul>
                  </li>
            <li> --}}
                <a href="{{route('teachers.index')}}">
                    <i class="fa fa-users"></i> <span>Professores</span>
                
                </a>
            </li>
            <li>
                <a href="{{route('grades.index')}}">
                    <i class="fa fa-users"></i> <span>Turmas</span>
                
                </a>
            </li>
            <li>
                <a href="{{route('supplies.find-teacher')}}">
                <i class="fa fa-users"></i> <span>Suprimento</span>
                
              </a>
            </li>
            <li>
            <a href="{{route('students.index')}}">
                <i class="fa fa-users"></i> <span>Alunos</span>
                
              </a>
            </li>
            <li>
                <a href="{{route('enrollments.find-student')}}">
                <i class="fa fa-users"></i> <span>Matrícular</span>
                
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
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>Aluno</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>Professor</a></li>
              </ul>
            </li>
        
      </ul>
    </section>
  </aside>