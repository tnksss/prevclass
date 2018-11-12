@extends('teacher.layout.app')
@section('content_header')
<h1>Lançar Conceitos - {{$grade->course->unity->name}}</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('teacher.home') }}">Dashboard</a></li>
    <li>{{$grade->fullName()}}</li>
</ol>
@stop

@section('content')
<div class="row">
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
                  
                  <th>Foto</th>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Sit. Matrícula</th>
                  <th>Avaliar</th>
                  
                </tr>
                
                @foreach($enrollments as $enrollment)
                <tr>
                    
                  {{-- <td>student->avatar</td> --}}
                  
                  <td><img class="img-circle img-bordered-sm img-mini"  src="{{url('storage/students/'.$enrollment->student->avatar)}}" /></td> 
                  <td><a href="{{route('grades.students.show', [
                      'grade'=>$enrollment->grade->id,
                      'enrollment' => $enrollment->id
                      ])}}"> {{$enrollment->student->name}}
                      </a>
                  </td>
                  <td>{{$enrollment->student->age()}}</td>
                  <td>{{$enrollment->status}}</td>
                  <td>
                    <button type="button"
                            class="btn btn-{{$enrollment->teacherConcept()->filled ? "success" : "danger"}}"
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


              
                <div class="checkbox">
                  <label for="criterion_1">
                    <input type="checkbox" name="criterion_1" id="criterion_1"value="1">
                    Desinteresse
                  </label>
                </div>
                <div class="checkbox">
                    <label for="criterion_2">
                      <input type="checkbox" name="criterion_2" id="criterion_2"value="1">
                      Não Produz
                  </label>
                </div>
                <div class="checkbox">
                    <label for="criterion_3">
                      <input type="checkbox" name="criterion_3" id="criterion_3"value="1">
                      Faltas
                    </label>
                </div>
                <div class="checkbox">
                    <label for="criterion_4">
                      <input type="checkbox" name="criterion_4" id="criterion_4"value="1">
                      Indisciplina
                    </label>
                </div>

              </div>
              <div class="col-md-6">
                  <div class="checkbox">
                    <label for="criterion_5">
                      <input type="checkbox" name="criterion_5" id="criterion_5"value="1">
                      Dificuldade
                    </label>
                  </div>
                  <div class="checkbox">
                      <label for="criterion_6">
                        <input type="checkbox" name="criterion_6" id="criterion_6"value="1">
                          Bom Comportamento
                    </label>
                  </div>
                  <div class="checkbox">
                      <label for="criterion_7">
                        <input type="checkbox" name="criterion_7" id="criterion_7"value="1">
                         Boas notas
                      </label>
                  </div>
                  <div class="checkbox">
                      <label for="criterion_8">
                        <input type="checkbox" name="criterion_8" id="criterion_8" value="1">
                        Sem Média
                      </label>
                  </div>
  
                </div>
                {{ Form::label('comment','Observações')}}
          {{ Form::text('comment',null,['class'=>'form-control', 'rows' => 4, 'cols' => 40])}}
        </div>
          
          
				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
@stop
    
    