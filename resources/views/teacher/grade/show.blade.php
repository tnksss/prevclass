@extends('teacher.layout.app')

@section('content_header')
<h1>Lançar Conceitos - {{$grade->course->unity->name}}</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li><a href="{{ route('grades.index') }}"></a>Turmas</a></li>
    <li>{{$grade->name}}</li>
</ol>
<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
    
    <div class="box box-success">
        <div class="box-header with-border">
            @include('admin.partials.errors')

            <table class="table">
              <tbody>
                <tr>
                  <td style="width: 10px"><strong>Curso :</strong> {{$grade->course->name}}</td>
                  <td style="width: 10px"><strong>Seriação: </strong> {{$grade->degree}}</td>
                  <td style="width: 10px"><strong>Turno: </strong> {{$grade->shift($grade->shift)}}</td>
                  <td style="width: 10px"><strong>Turma: </strong> {{$grade->order}}</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Alunos:</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  
                  
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Sit. Matrícula</th>
                  <th>Avaliar</th>
                  
                </tr>
                
                @foreach($enrollments as $enrollment)
                <tr>
                    
                  {{-- <td>student->avatar</td> --}}
                  
                  
                  <td>{{$enrollment->student->name}}</td>
                  <td>{{$enrollment->student->age()}}</td>
                  <td>{{$enrollment->status}}</td>
                  <td>
                    <button type="button"
                            class="btn btn-{{$enrollment->teacherConcept()->filled ? "primary" : "warning"}}"
                            data-myconceptid  ="{{$enrollment->teacherConcept()->id}}"
                            data-mycomment    ="{{$enrollment->teacherConcept()->comment}}"
                            data-mycriterion1 ="{{$enrollment->teacherConcept()->criterion_1}}"
                            data-mycriterion2 ="{{$enrollment->teacherConcept()->criterion_2}}"
                            data-mycriterion3 ="{{$enrollment->teacherConcept()->criterion_3}}"
                            data-mycriterion4 ="{{$enrollment->teacherConcept()->criterion_4}}"
                            data-mycriterion5 ="{{$enrollment->teacherConcept()->criterion_5}}"
                            data-mycriterion6 ="{{$enrollment->teacherConcept()->criterion_6}}"
                            data-mycriterion7 ="{{$enrollment->teacherConcept()->criterion_7}}"
                            data-mycriterion8 ="{{$enrollment->teacherConcept()->criterion_8}}"

                            data-toggle="modal" data-target="#exampleModal">
                      Avaliar
                    </button>
                  </td>
                  
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

    </div>
    
          

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Selecione as opções</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <form action="{{route('concepts.update','test')}}" method="POST">
                {{method_field('patch')}}
                {{csrf_field()}}
              <input type="hidden" name="concept_id" id="concept_id" value="">
              <label class="container-checkbox"> Desinteresse
                  {{Form::checkbox('criterion_1',null)}}
                  <span class="checkmark"></span>
                </label>
                <label class="container-checkbox"> Não Produz
                    {{Form::checkbox('criterion_2')}}
                    <span class="checkmark"></span>
                </label>
                <label class="container-checkbox"> Excesso de Faltas
                    {{Form::checkbox('criterion_3')}}
                    <span class="checkmark"></span>
                  </label>
                <label class="container-checkbox"> Indisciplina
                      {{Form::checkbox('criterion_4')}}
                      <span class="checkmark"></span>
                </label>
          </div>
          <div class="col-sm-6">
              <label class="container-checkbox"> Dificuldade
                  {{Form::checkbox('criterion_5')}}
                  <span class="checkmark"></span>
                </label>
                <label class="container-checkbox"> Bom Comportamento
                    {{Form::checkbox('criterion_6')}}
                    <span class="checkmark"></span>
                </label>
                <label class="container-checkbox"> Boa Nota
                    {{Form::checkbox('criterion_7')}}
                    <span class="checkmark"></span>
                  </label>
                <label class="container-checkbox"> Sem Média
                      {{Form::checkbox('criterion_8')}}
                      <span class="checkmark"></span>
                </label>
          </div>
        </div>
          {{ Form::label('comment','Observações')}}
          {{ Form::text('comment',null,['class'=>'form-control', 'rows' => 4, 'cols' => 40])}}
          
				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>
@stop
    
    