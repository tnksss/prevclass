<div class="row">
    <div class="col-md-6">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('name','Nome do Aluno')}}
                {{ Form::text('name',old('name') ?? $student->name ?? null, array_merge(['class' => 'form-control', 'autofocus'])) }}                      
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('cgm','CGM')}}
                {{ Form::text('cgm', old('cgm') ?? $student->cgm ?? null, array_merge(['class' => 'form-control','autofocus'])) }}                        
                
            </div>
        </div>
        
        
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('bornDate', 'Data de Nascimento')}}
                {{ Form::date('bornDate', old('bornDate') ?? $student->bornDate ?? '\Carbon\Carbon::now()',array('class'=> 'form-control') )}}
            </div>
        </div>
        
    </div>
    <div class="col-md-6">
        
        @if($student->avatar == null)                      
        <label id="avatar" for="avatar"><img src="{{url('storage/students/student-default.png')}}" width="200px" height="200px"/></label>
        @else
        <label id="avatar" for="avatar"><img src="{{url('storage/students/'.$student->avatar)}}" width="200px" height="200px"/></label>
        @endif
        <input type="file" id="avatar" name="avatar" type="hidden" class="upload_file" />  
    </div>
</div>
<div class="row">
</div>
