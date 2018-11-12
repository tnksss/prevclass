@extends('teacher.layout.app')
@section('content_header')
<h1>Aluno</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('teacher.home') }}">Dashboard</a></li>
    <li><a href="{{ route('teacher.grade.show',$enrollment->grade->id) }}">{{$enrollment->grade->fullName()}}</a></li>
    <li>{{$enrollment->student->name}}</li>
</ol>

@stop
@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{url('storage/students/'.$enrollment->student->avatar)}}" alt="student profile picture">
        <h3 class="profile-username text-center">{{$enrollment->student->name}}</h3>
        <p class="text-muted text-center">Turma: {{$enrollment->grade->fullName()}}</p>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Data de Nascimento:</b> <p class="pull-right">{{$enrollment->student->bornDateFormatted()}}</p>
          </li>
          <li class="list-group-item">
            <b>Idade: </b> <p class="pull-right">{{$enrollment->student->age()}}</p>
          </li>
          
        </ul>

        <a href="#" class="btn btn-primary  btn-block"><b>Avaliar</b></a>
        <a href="{{URL::previous()}}" class="btn btn-warning btn-block"><b>Voltar para a turma</b></a>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    

    
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="box box-info">
      <div class="box-header">
        <h3>Conceitos</h3>
      </div>
      <div class="box-body">

    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">1º Trimestre</a></li>
        <li><a href="#timeline" data-toggle="tab">2º Trimestre</a></li>
        <li><a href="#settings" data-toggle="tab">3º Trimestre</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
          <div class="row">
            <div class="col-sm-6">
                <div class="box box-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-aqua">
                      
                      <!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Total de Conceitos</h3>
                      
                    </div>
                    <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                            @if($concepts->where('criterion_1',1)->count()>0)
                              <li><p><strong>Desinteresse: </strong><span class="pull-right badge bg-red">{{ $concepts->where('criterion_1',1)->count()}}</span></a></li>
                            @endif
                            @if($concepts->where('criterion_2',1)->count()>0)
                              <li><p><strong>Não Produz: </strong><span class="pull-right badge bg-red">{{ $concepts->where('criterion_2',1)->count()}}</span></a></li>
                            @endif
                            @if($concepts->where('criterion_3',1)->count()>0)
                              <li><p><strong>Faltoso: </strong><span class="pull-right badge bg-yellow">{{ $concepts->where('criterion_3',1)->count()}}</span></a></li>
                            @endif
                            @if($concepts->where('criterion_4',1)->count()>0)
                              <li><p><strong>Indisciplinado: </strong><span class="pull-right badge bg-red">{{ $concepts->where('criterion_4',1)->count()}}</span></a></li>
                            @endif
                            @if($concepts->where('criterion_5',1)->count()>0)
                              <li><p><strong>Dificuldade de Aprendizagem: </strong><span class="pull-right badge bg-yellow">{{ $concepts->where('criterion_5',1)->count()}}</span></a></li>
                            @endif
                            @if($concepts->where('criterion_6',1)->count()>0)      
                              <li><p><strong>Bom Comportamento: </strong><span class="pull-right badge bg-blue">{{ $concepts->where('criterion_6',1)->count()}}</span></a></li>
                            @endif
                            @if($concepts->where('criterion_7',1)->count()>0)
                              <li><p><strong>Boas Notas: </strong><span class="pull-right badge bg-blue">{{ $concepts->where('criterion_7',1)->count()}}</span></a></li>
                            @endif
                            @if($concepts->where('criterion_8',1)->count()>0)    
                              <li><p><strong>Sem Média: </strong><span class="pull-right badge bg-yellow">{{ $concepts->where('criterion_8',1)->count()}}</span></a></li>
                            @endif
                            

                        </ul>  
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-aqua">
                    
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">Comentários</h3>
                    
                  </div>
                  <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                      @if($concepts->where('comment', !null)->count() > 0)
                        @foreach($concepts as $concept)
                        <li><p>{{$concept->comment}}</p></li>
                        @endforeach
                      @else
                      <li>
                        <p>Nenhum Comentário</p>
                      </li>
                      @endif                      
                    </ul>
                  </div>
                </div>
                <!-- /.widget-user -->
              </div>
          </div>
      </div> 
        <!-- /.tab-pane -->
        <div class="tab-pane" id="timeline">
          {{-- <!-- The timeline -->
          <ul class="timeline timeline-inverse">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Read more</a>
                  <a class="btn btn-danger btn-xs">Delete</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                </h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                <div class="timeline-body">
                  Take me to your leader!
                  Switzerland is small and neutral!
                  We are more like Germany, ambitious and misunderstood!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-camera bg-purple"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                <div class="timeline-body">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul> --}}
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane" id="settings">
          {{-- <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name</label>

              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputName" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>

              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

              <div class="col-sm-10">
                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </div>
          </form> --}}
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
  </div>
  </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>

@endsection